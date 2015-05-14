<?php
/*=======================================================================
 * ClientController
 * 
 * Author:      Tracebyte
 * Site:        http://tracestay.co.in
 *======================================================================*/

namespace Trace\Bundle\TraceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Trace\Bundle\TraceBundle\Entity\Client;
use Trace\Bundle\TraceBundle\Form\ClientType;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
    
    /**
     * @Route("/home",name="home")
     */
    public function homeAction(){
        return $this->render('TraceBundle:home:index.html.twig');
    }
    
    /**
     * @Route("/", name="index")
     */
    public function indexAction(){
        if(null !== $this->getUser()){
            $subdomain = $this->getDoctrine()->getRepository('TraceBundle:university')->findOneBy(['id'=>$this->getUser()->getUniversity()->getId()])->getTSubdomainName();
            $message="Hello ".$this->getUser()->getFirstName()." redirecting you to your domain at  http://{$subdomain}.tracestay.co.in/web/app_dev.php/login";
        }else{
            $message = 'not logged in.. no details to show';
        }
        return $this->render('TraceBundle:user:index.html.twig', ['message'=>$message]);
    }
    
    /**
     * @Route("/registerWebsite", name="register_website")
     */
    public function registerWebsiteAction(Request $request){
        $client = new Client();
        $form = $this->createForm(new ClientType($client), $client);
        
        $form->handleRequest($request);
        if($form->isValid()){
            $em = $this->getDoctrine()->getEntityManager();
            $univerity = $form->get('university')->getData();
            $em->persist($client);
            $em->persist($univerity);
            $em->flush();
            return $this->redirect($this->generateUrl('createDomain',['subdomain'=>$form->get('university')->getData()->getTSubdomainName()]));
        }
        return $this->render('TraceBundle:Client:registerWebsite.html.twig', ['form'=>$form->createView()]);
    }

    /**
     * @Route("/createDomain/{subdomain}", name="createDomain")
     */
    public function createDomainAction($subdomain){
        $currentDir = getcwd();
        chdir('/etc/');
        $ip = '127.0.0.1';
        exec("sudo chmod 777 /etc/hosts"); //what is exec command
        
        $file = 'hosts';
        $current = file_get_contents($file);
        $current.= "\n " . $ip . ' ' . $subdomain . '.tracestay.co.in';
        
        $link = file_put_contents($file, $current) ? "http://{$subdomain}.tracestay.co.in/Trace/web/app_dev.php/register/confirmed" : "";
        
        exec("sudo chmod 644 /etc/hosts");
        chdir($currentDir);
        return $this->redirect($link);
        
    }
}