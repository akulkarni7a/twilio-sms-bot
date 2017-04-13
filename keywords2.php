<?php
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid='####'; //blocked out the token
    $token='####'; //blocked out the token
    $twilioNum='#####'; //blocked out the number 
	$fileName = "enrollment.csv";

    $client = new Twilio\Rest\Client($sid, $token);



//Function



// General Response
    function index(){
    $response = new Twilio\Twiml();
       $response->message("Hi there! Thank you for your interest in Carpe Diem Private Preschool. I'm an automated system that is capable of answering most of your questions! If you're having trouble, you can always give me a call to connect directly with an admissions counselor. So go ahead, ask me something!");
       echo $response;
    } 

    function price(){ 
       $response = new Twilio\Twiml();
        $response->message("Unfortunately, I don't have enough information to help you. Try sending the text again but also include location and program level. Otherwise, feel free to call this number to speak with an enrollment specialist.");         

        echo $response;
    } 

	function schoolcapacity(){ 
       $response = new Twilio\Twiml();
        $response->message("Unfortunately, because I'm an automated system, I don't know how many openings there are. To find out, please call the phone number that you recieved this text from to speak to our admissions counselor.");         

        echo $response; 

	}
	function hours(){ 
       $response = new Twilio\Twiml();
        $response->message("All of our Carpe Diem schools are open from 7:00AM to 6:30PM.");         

        echo $response; 

	}
	function locations(){ 
       $response = new Twilio\Twiml();
        $response->message("Carpe Diem has four convenient locations in Dallas including Allen, Frisco, Richardson, and Southlake.");         

        echo $response; 

	}
	function registrations(){ 
       $response = new Twilio\Twiml();
        $response->message("That's awesome! We're excited to speak to you about joining our Carpe Diem Family! An admissions counselor will reach out to you shortly or if you'd prefer, you may call this phone number to reach out now.");         

        echo $response; 

	}
	function summer(){ 
       $response = new Twilio\Twiml();
        $response->message("Our summer camps have been voted 'Best in Dallas' by ___ magazine. We have weekly field trips to locations like ____.");         

        echo $response; 

	}
	function tour(){ 
       $response = new Twilio\Twiml();
        $response->message("Great! We'd love to show you our facilities, our teachers, our security enhancements, and our warm and welcoming teachers. You can schedule a tour by going here:________ or give this number a call to speak to an admissions coordinator.");         

        echo $response; 

	}
	function safety(){ 
       $response = new Twilio\Twiml();
        $response->message("Our schools are equipped with the latest of security technology. All of our schools are keypad entries and all visitors have a background check run on them on location before entering. In addition, our safety and security drills are conducted by a firm made up of former secret service agents. We'd love to have you come visit us to see our security measures up close!");         

        echo $response; 

	}
	function food(){ 
       $response = new Twilio\Twiml();
        $response->message("Each of our schools have daily prepared breakfast, lunch, and three snacks during the day. For students who have special dietary restrictions, we offer a vegetarian menu as well. All of our food is peanut free.");         

        echo $response; 

	}
	function ratios(){ 
       $response = new Twilio\Twiml();
        $response->message("We are a big believer in small ratios to allow for more personalized development of your child. Our ratios are as follows - Infant is 3:1, Young Toddler is 5:1, Older Toddler is 6:1, Preschool A is 8:1, Preschool B is 10:1, Pre-K is 12:1, Kindergarten is 15:1, and After School is 15:1.");         

        echo $response; 

	}
	function enrichment(){ 
       $response = new Twilio\Twiml();
        $response->message("Because we believe so strongly of developing all asepcts of a child, we offer daily music, Spanish, and computer classes. Depending on the location, we also offer extra enrichment programs such as Soccer Shot, Kidokinetics, Yoga, and much more! For more information, call this number to speak to a enrollment advisor.");         

        echo $response; 

	}
	function health(){ 
       $response = new Twilio\Twiml();
        $response->message("We know the health of your child is important. That is why we have a cleaning crew that comes in daily as well as a housekeeper at some locations.");         

        echo $response; 
        
	}
	function curriculum(){ 
       $response = new Twilio\Twiml();
        $response->message("We offer a individualized learning curriculum that emphasizes each child's unique learning style. We are proud to follow NAEYC guidelines. For more information, please call the phone number to speak with an admissions representative.");         

        echo $response; 

	}
	function schedule(){ 
       $response = new Twilio\Twiml();
        $response->message("All of our schools offer part time schedules for all age groups except Infant and Kindergarten. To learn more, please give this number a call.");         

        echo $response; 

	}
	function accredit(){ 
       $response = new Twilio\Twiml();
        $response->message("We are accredited by the state of Texas and are proud to follow NAEYC guidelines.");         

        echo $response; 

	}
	function year(){ 
       $response = new Twilio\Twiml();
        $response->message("Because our curriculumn is based on your child's developmental phase, it's hard for us to say what classroom your child would be in exactly. You can ask your question again using the programs offered at Carpe Diem: Infant, Toddler, Preschool, Kindergarten, Afterschool. Otherwise, you may call this number to speak to an enrollment specialist.");         

        echo $response; 

	}
	function degree(){ 
       $response = new Twilio\Twiml();
        $response->message("AK needs to come up with something here.");         

        echo $response; 
        
    }function bus(){ 
       $response = new Twilio\Twiml();
        $response->message("Our schools pick up from a variety of nearby elementary schools. For more a list of specific schools, please send the text again but also include the particular Carpe Diem location you are interested in.");         

        echo $response;
    
        
    }function joke(){ 
       $response = new Twilio\Twiml();
        $response->message("I would tell you a joke but I'm afraid my delivery might be too robotic. Ha. Ha. Ha.");         

        echo $response;
     
  
    }function endeavor(){ 
       $response = new Twilio\Twiml();
        $response->message("Carpe Diem is proud of be a part of the Endeavor Schools family. Endeavor Schools is an educational organization that seeks to bring together educators from all corners of the country to better serve our families.");         

        echo $response;
     
      
    
//Allen

    }function allenlocation(){ 
       $response = new Twilio\Twiml();
        $response->message("Our Allen school is located at 873 Junction Dr, Allen, TX 75013.");         

        echo $response;
     
    
    }function allenbus(){ 
       $response = new Twilio\Twiml();
        $response->message("Our Allen school picks up from the following elementary schools: Kerr, Vaughn, Mary Evans, Cheatham, Lindsey, Green, Boon, Reed, Marion.");         

        echo $response;
    } 
    
//Allen openings

    function allenopeningsinfant(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPAInfant";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Infant classroom at Allen. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function allenopeningstoddler(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName1="CDPAYoung Toddler";
		$findName2="CDPAOlder Toddler";
		$output1="";
		$output2="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName1)   // index 0 contains the name
 		   $output1.= $values[7];          // index 1 contains the email  
				
	
 		 if($values[0]==$findName2)   // index 0 contains the name
 		   $output2.= $values[7];          // index 1 contains the email  
				}
    
		$response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output1 openings for the Young Toddler classroom at Allen. We have $output2 openings for the Older Toddler classroom at Allen. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function allenopeningspreschool(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName1="CDPAPreschool A";
		$findName2="CDPAPreschool B";
		$output1="";
		$output2="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName1)   // index 0 contains the name
 		   $output1.= $values[7];          // index 1 contains the email  
				
	
 		 if($values[0]==$findName2)   // index 0 contains the name
 		   $output2.= $values[7];          // index 1 contains the email  
				}
    
		$response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output1 openings for the Preschool A classroom at Allen. We have $output2 openings for the Preschool B classroom at Allen. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

    function allenopeningsprek(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPAPre-K";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Pre-K classroom at Allen. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function allenopeningskg(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPAKindergarten";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Kindergarten classroom at Allen. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function allenopeningsafter(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPAAfterschool";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Afterschool classroom at Allen. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 


//Allen Pricing

    function pricealleninfant(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Allen as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access to daily music classes, everything is included in the price! The pricing for the infant room is $1,465. Part time programs are not offered.");         

        echo $response;
    } 
    function priceallentoddler(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Allen as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access to daily music classes, everything is included in the price! The pricing for Young Toddler is $1,365 while pricing for Older Toddler is $1,350. Part time programs are offered.");         

        echo $response;
    } 

    function priceallenpreschool(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Allen as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Preschool A is $1,310 whereas Preschool B is $1,255. Part time programs are offered.");         

        echo $response;
    }
        
    function priceallenprek(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Allen as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Pre-K is $1,210. Part time programs are offered.");         

        echo $response;

    } 

    function priceallenkg(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Allen as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Kindergarten is $1,050. Part time programs are not offered.");         

        echo $response;

    } 

    function priceallenafter(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Allen as a 'no hassle, no worries' pricing model. The pricing for Afterschool is $370.");         

        echo $response;

    } 
    







//Frisco

	function friscolocation(){ 
       $response = new Twilio\Twiml();
        $response->message("Our Frisco school is located at 5570 Warren Pkwy, Frisco, TX 75034.");         

        echo $response;
    } 
    
    function friscobus(){ 
       $response = new Twilio\Twiml();
        $response->message("Our Frisco school picks up from the following elementary schools: Hicks, Carroll, Nichols, Sparks, Bledsoe, Hosp, Pink, Vaughn.");         

        echo $response;
    } 
    
    
//Frisco Openings

    function friscoopeningsinfant(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPFInfant";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Infant classroom at Frisco. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

    function friscoopeningsmobileinfant(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPFMobile Infant";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Mobile Infant classroom at Frisco. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function friscoopeningstoddler(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName1="CDPFYoung Toddler";
		$findName2="CDPFOlder Toddler";
		$output1="";
		$output2="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName1)   // index 0 contains the name
 		   $output1.= $values[7];          // index 1 contains the email  
				
	
 		 if($values[0]==$findName2)   // index 0 contains the name
 		   $output2.= $values[7];          // index 1 contains the email  
				}
    
		$response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output1 openings for the Young Toddler classroom at Frisco. We have $output2 openings for the Older Toddler classroom at Frisco. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function friscoopeningspreschool(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName1="CDPFPreschool A";
		$findName2="CDPFPreschool B";
		$output1="";
		$output2="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName1)   // index 0 contains the name
 		   $output1.= $values[7];          // index 1 contains the email  
				
	
 		 if($values[0]==$findName2)   // index 0 contains the name
 		   $output2.= $values[7];          // index 1 contains the email  
				}
    
		$response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output1 openings for the Preschool A classroom at Frisco. We have $output2 openings for the Preschool B classroom at Frisco. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

    function friscoopeningsprek(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPFPreK";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Pre-K classroom at Frisco. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function friscoopeningskg(){ 
       	$response = new Twilio\Twiml();
        $response->message("Unfortunately, we don't offer Kindergarten at Carpe Diem Frisco. Our Allen and Southlake locations do, however.");         

        echo $response;
    } 
    
    function friscoopeningsafter(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPFAfter School Care";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Afterschool classroom at Frisco. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

//Frisco Pricing

    function pricefriscoinfant(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Frisco as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access to daily music classes, everything is included in the price! The pricing for the infant room is $1,525. Part time programs are not offered.");         

        echo $response;
    } 
    function pricefriscotoddler(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Frisco as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access to daily music classes, everything is included in the price! The pricing for both Young and Older Toddlers is $1,420. Part time programs are offered.");         

        echo $response;
    } 

    function pricefriscopreschool(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Frisco as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Transition to Preschool and Preschool A is $1,340 while Preschool B is $1,255. Part time programs are offered.");         

        echo $response;
    }
        
    function pricefriscoprek(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Frisco as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Pre-K is $1,235. Part time programs are offered.");         

        echo $response;

    } 

    function pricefriscokg(){ 
       $response = new Twilio\Twiml();
        $response->message("Unfortunately, we don't offer Kindergarten at Carpe Diem Frisco. Our Allen and Southlake locations do, however.");         

        echo $response;

    } 

    function pricefriscoafter(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Frisco as a 'no hassle, no worries' pricing model. The pricing for Afterschool is $370.");         

        echo $response;

    } 
  
  
  
  
  

//Richardson

	function richardsonlocation(){ 
       $response = new Twilio\Twiml();
        $response->message("Our Richardson school is located at 271 Renner Pkwy, Richardson, TX 75080.");         

        echo $response;
    } 

    function richardsonbus(){ 
       $response = new Twilio\Twiml();
        $response->message("Our Richardson school picks up from the following elementary schools: St. Mark, Shepard, Harrington, Stinson, Schell, Big Springs.");         

        echo $response;
    } 


//Richardson Openings

    function richardsonopeningsinfant(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPRInfant";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Infant classroom at Richardson. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

    function richardsonopeningsmobileinfant(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPRMobile Infants";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Mobile Infant classroom at Richardson. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function richardsonopeningstoddler(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName1="CDPRYoung Toddler";
		$findName2="CDPROlder Toddler";
		$output1="";
		$output2="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName1)   // index 0 contains the name
 		   $output1.= $values[7];          // index 1 contains the email  
				
	
 		 if($values[0]==$findName2)   // index 0 contains the name
 		   $output2.= $values[7];          // index 1 contains the email  
				}
    
		$response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output1 openings for the Young Toddler classroom at Richardson. We have $output2 openings for the Older Toddler classroom. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function richardsonopeningspreschool(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName1="CDPRPreschool A";
		$findName2="CDPRPreschool B";
		$findName3="CDPRTransition to PS";
		$output1="";
		$output2="";
		$output3="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName1)   // index 0 contains the name
 		   $output1.= $values[7];          // index 1 contains the email  
				
	
 		 if($values[0]==$findName2)   // index 0 contains the name
 		   $output2.= $values[7];          // index 1 contains the email  

 		 if($values[0]==$findName3)   // index 0 contains the name
 		   $output3.= $values[7];          // index 1 contains the email  
				
				}
    
		$response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output1 openings for the Preschool A classroom at Richardson. We have $output2 openings for the Preschool B classroom. We have $output3 openings in our Transition to Preschool classroom. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

    function richardsonopeningsprek(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPRPre-K";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Pre-K classroom at Richardson. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function richardsonopeningskg(){ 
       	$response = new Twilio\Twiml();
        $response->message("Unfortunately, we don't offer Kindergarten at Carpe Diem Richardson. Our Allen and Southlake locations do, however.");         

        echo $response;
    } 
    
    function richardsonopeningsafter(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPRAfter School";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Afterschool classroom at Frisco. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

    
//Richardson Pricing
    
    function pricerichardsoninfant(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Richardson as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access to daily music classes, everything is included in the price! The pricing for the infant room is $1,510. Part time programs are not offered.");         

        echo $response;
    } 
    function pricerichardsontoddler(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Richardson as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access to daily music classes, everything is included in the price! The pricing for Young Toddlers is $1,455 while Older Toddlers is $1,380. Part time programs are not offered.");         

        echo $response;
    } 

    function pricerichardsonpreschool(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Richardson as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Transition to Preschool is $1,315. Tuition for Preschool A and Preschool B is $1,195. Part time programs are offered.");         

        echo $response;
    }
        
    function pricerichardsonprek(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Richardson as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Pre-K is $1,195. Part time programs are offered.");         

        echo $response;

    } 

    function pricerichardsonkg(){ 
       $response = new Twilio\Twiml();
        $response->message("Unfortunately, we don't offer Kindergarten at Carpe Diem Richardson. Our Allen and Southlake locations do, however.");         

        echo $response;

    } 

    function pricerichardsonafter(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Richardson as a 'no hassle, no worries' pricing model. The pricing for Afterschool is $365.");         

        echo $response;

    } 




//Southlake

	function southlakelocation(){ 
       $response = new Twilio\Twiml();
        $response->message("Our Southlake school is located at 300 Randol Mill Ave, Southlake, TX 76092.");         

        echo $response;
    } 

    function southlakebus(){ 
       $response = new Twilio\Twiml();
        $response->message("Our Southlake school picks up from the following elementary schools: Walnut Grove, Johnson, Carroll, Old Union, Rockenbaugh, Florence, Beck, Lakeview, Westlake.");         

        echo $response;
    } 

//Southlake Openings

    function southlakeopeningsinfant(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPSInfant";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Infant classroom at Southlake. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

    
    function southlakeopeningstoddler(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName1="CDPSYoung Toddler";
		$findName2="CDPSOlder Toddler";
		$output1="";
		$output2="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName1)   // index 0 contains the name
 		   $output1.= $values[7];          // index 1 contains the email  
				
	
 		 if($values[0]==$findName2)   // index 0 contains the name
 		   $output2.= $values[7];          // index 1 contains the email  
				}
    
		$response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output1 openings for the Young Toddler classroom at Southlake. We have $output2 openings for the Older Toddler classroom. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function southlakeopeningspreschool(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName1="CDPSPreschool A";
		$findName2="CDPSPreschool B";
		$output1="";
		$output2="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName1)   // index 0 contains the name
 		   $output1.= $values[7];          // index 1 contains the email  
				
	
 		 if($values[0]==$findName2)   // index 0 contains the name
 		   $output2.= $values[7];          // index 1 contains the email  	
				}
    
		$response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output1 openings for the Preschool A classroom at Southlake. We have $output2 openings for the Preschool B classroom. We have $output3 openings in our Transition to Preschool classroom. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 

    function southlakeopeningsprek(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPSPre-K";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Pre-K classroom at Southlake. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function southlakeopeningskg(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPSKindergarten";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Kindergarten classroom at Southlake. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 
    
    function southlakeopeningsafter(){ 
    	$csv = array_map('str_getcsv', file('enrollment.csv'));
		$findName="CDPSAfterschool";
		$output="";
    	
    	foreach($csv as $values)
			{
 		 if($values[0]==$findName)   // index 0 contains the name
 		   $output.= $values[7];          // index 1 contains the email  
				}
    
       $response = new Twilio\Twiml();
        $response->message("As of Monday, we have $output openings for the Afterschool classroom at Frisco. To get the most up to date information, please call this phone number to speak with an admissions representative.");         

        echo $response;
    } 


//Southlake Pricing

    function pricesouthlakeinfant(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Southlake as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access to daily music classes, everything is included in the price! The pricing for the infant room is $1,440. Part time programs are not offered.");         

        echo $response;
    } 
    function pricesouthlaketoddler(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Southlake as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access to daily music classes, everything is included in the price! The pricing for Young Toddlers is $1,390 while Older Toddlers is $1,325. Part time programs are offered.");         

        echo $response;
    } 

    function pricesouthlakepreschool(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Southlake as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Preschool A is $1,285. Tuition for Preschool B is $1,185. Part time programs are offered.");         

        echo $response;
    }
        
    function pricesouthlakeprek(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Southlake as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Pre-K is $1,160. Part time programs are offered.");         

        echo $response;

    } 

    function pricesouthlakekg(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem Southlake as a 'no hassle, no worries' pricing model. From diapers, wipes, food, live webcam access, to daily music, spanish, and computer classes, everything is included in the price! The pricing for Kindergarten is $1,030. Part time programs are offered.");         

        echo $response;

    } 

    function pricesouthlakeafter(){ 
       $response = new Twilio\Twiml();
        $response->message("We consider our pricing model at Carpe Diem southlake as a 'no hassle, no worries' pricing model. The pricing for Afterschool is $465.");         

        echo $response;

    } 


//Other

    function dog(){
        $response = new Twilio\Twiml();
        $response->message("Dog. A domesticated carnivorous mammal that typically has a long snout, an acute sense of smell, and a barking, howling, or whining voice."); 
        echo $response;
    } 


    $body = $_REQUEST['Body'];

    $result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
    $result = trim($result); 
    $result = strtolower($result);








//Logic

//Allen

// Allen Pricing Specifically - Price
    if(stripos($body, "price") !== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricealleninfant();
    } else if(stripos($body, "price")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "toddler") !== FALSE) {
        priceallentoddler();  
    } else if(stripos($body, "price")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "preschool") !== FALSE) {
        priceallenpreschool(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "pre") !== FALSE) {
        priceallenprek(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kind") !== FALSE) {
        priceallenkg(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kg") !== FALSE) {
        priceallenkg(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "after") !== FALSE) {
        priceallenafter(); 

// Allen Pricing Specifically - tuition
	} else if(stripos($body, "tuition")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricealleninfant();
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "toddler") !== FALSE) {
        priceallentoddler();  
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "preschool") !== FALSE) {
        priceallenpreschool(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "pre") !== FALSE) {
        priceallenprek(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kind") !== FALSE) {
        priceallenkg(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kg") !== FALSE) {
        priceallenkg(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "after") !== FALSE) {
        priceallenafter();     


// Allen Pricing Specifically - rate
	} else if(stripos($body, "rate")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricealleninfant();
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "toddler") !== FALSE) {
        priceallentoddler();  
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "preschool") !== FALSE) {
        priceallenpreschool(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "pre") !== FALSE) {
        priceallenprek(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kind") !== FALSE) {
        priceallenkg(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kg") !== FALSE) {
        priceallenkg(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "after") !== FALSE) {
        priceallenafter();   
        
// Allen Pricing Specifically - much
	} else if(stripos($body, "much is")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricealleninfant();
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "toddler") !== FALSE) {
        priceallentoddler();  
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "preschool") !== FALSE) {
        priceallenpreschool(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "pre") !== FALSE) {
        priceallenprek(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kind") !== FALSE) {
        priceallenkg(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kg") !== FALSE) {
        priceallenkg(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "after") !== FALSE) {
        priceallenafter();
         
//Allen Openings- Avail
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "infant") !== FALSE) {
        allenopeningsinfant(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "toddler") !== FALSE) {
        allenopeningstoddler(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "preschool") !== FALSE) {
        allenopeningspreschool(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "pre") !== FALSE) {
        allenopeningsprek(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kind") !== FALSE) {
        allenopeningskg(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kg") !== FALSE) {
        allenopeningskg();   
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "after") !== FALSE) {
        allenopeningsafter(); 

//Allen Openings- Openings
    } else if(stripos($body, "open")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "infant") !== FALSE) {
        allenopeningsinfant(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "toddler") !== FALSE) {
        allenopeningstoddler(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "preschool") !== FALSE) {
        allenopeningspreschool(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "pre") !== FALSE) {
        allenopeningsprek(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kind") !== FALSE) {
        allenopeningskg(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kg") !== FALSE) {
        allenopeningskg();   
    } else if(stripos($body, "open")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "after") !== FALSE) {
        allenopeningsafter();   

//Allen Openings- Space
    } else if(stripos($body, "space")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "infant") !== FALSE) {
        allenopeningsinfant(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "toddler") !== FALSE) {
        allenopeningstoddler(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "preschool") !== FALSE) {
        allenopeningspreschool(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "pre") !== FALSE) {
        allenopeningsprek(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kind") !== FALSE) {
        allenopeningskg(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "kg") !== FALSE) {
        allenopeningskg();   
    } else if(stripos($body, "space")!== FALSE && stripos($body, "allen") !== FALSE && stripos($body, "after") !== FALSE) {
        allenopeningsafter();    
         
         
         
//Frisco         
         
         
// Frisco Pricing Specifically - Price
    } else if(stripos($body, "price") !== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricefriscoinfant();
    } else if(stripos($body, "price")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricefriscotoddler();  
    } else if(stripos($body, "price")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricefriscopreschool(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricefriscoprek(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricefriscokg(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricefriscokg(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "after") !== FALSE) {
        pricefriscoafter(); 

// frisco Pricing Specifically - tuition
	} else if(stripos($body, "tuition")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricefriscoinfant();
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricefriscotoddler();  
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricefriscopreschool(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricefriscoprek(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricefriscokg(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricefriscokg(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "after") !== FALSE) {
        pricefriscoafter();     


// frisco Pricing Specifically - rate
	} else if(stripos($body, "rate")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricefriscoinfant();
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricefriscotoddler();  
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricefriscopreschool(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricefriscoprek(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricefriscokg(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricefriscokg();  
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "after") !== FALSE) {
        pricefriscoafter();   
        
// frisco Pricing Specifically - much
	} else if(stripos($body, "much is")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricefriscoinfant();
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricefriscotoddler();  
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricefriscopreschool(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricefriscoprek(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricefriscokg(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricefriscokg();  
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "after") !== FALSE) {
        pricefriscoafter();  
        
//frisco Openings- Avail
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "infant") !== FALSE) {
        friscoopeningsinfant(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "toddler") !== FALSE) {
        friscoopeningstoddler(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "preschool") !== FALSE) {
        friscoopeningspreschool(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "pre") !== FALSE) {
        friscoopeningsprek(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kind") !== FALSE) {
        friscoopeningskg(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kg") !== FALSE) {
        friscoopeningskg();   
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "after") !== FALSE) {
        friscoopeningsafter(); 

//frisco Openings- Openings
    } else if(stripos($body, "open")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "infant") !== FALSE) {
        friscoopeningsinfant(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "toddler") !== FALSE) {
        friscoopeningstoddler(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "preschool") !== FALSE) {
        friscoopeningspreschool(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "pre") !== FALSE) {
        friscoopeningsprek(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kind") !== FALSE) {
        friscoopeningskg(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kg") !== FALSE) {
        friscoopeningskg();   
    } else if(stripos($body, "open")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "after") !== FALSE) {
        friscoopeningsafter();   

//frisco Openings- Space
    } else if(stripos($body, "space")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "infant") !== FALSE) {
        friscoopeningsinfant(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "toddler") !== FALSE) {
        friscoopeningstoddler(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "preschool") !== FALSE) {
        friscoopeningspreschool(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "pre") !== FALSE) {
        friscoopeningsprek(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kind") !== FALSE) {
        friscoopeningskg(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "kg") !== FALSE) {
        friscoopeningskg();   
    } else if(stripos($body, "space")!== FALSE && stripos($body, "frisco") !== FALSE && stripos($body, "after") !== FALSE) {
        friscoopeningsafter();    
         
          
           







//Richardson

// richardson Pricing Specifically - Price
    } else if(stripos($body, "price") !== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricerichardsoninfant();
    } else if(stripos($body, "price")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricerichardsontoddler();  
    } else if(stripos($body, "price")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricerichardsonpreschool(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricerichardsonprek(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricerichardsonkg(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricerichardsonkg(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "after") !== FALSE) {
        pricerichardsonafter(); 

// richardson Pricing Specifically - tuition
	} else if(stripos($body, "tuition")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricerichardsoninfant();
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricerichardsontoddler();  
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricerichardsonpreschool(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricerichardsonprek(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricerichardsonkg(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricerichardsonkg(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "after") !== FALSE) {
        pricerichardsonafter();     


// richardson Pricing Specifically - rate
	} else if(stripos($body, "rate")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricerichardsoninfant();
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricerichardsontoddler();  
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricerichardsonpreschool(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricerichardsonprek(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricerichardsonkg(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricerichardsonkg();  
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "after") !== FALSE) {
        pricerichardsonafter();   
        
// richardson Pricing Specifically - much
	} else if(stripos($body, "much is")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricerichardsoninfant();
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricerichardsontoddler();  
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricerichardsonpreschool(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricerichardsonprek(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricerichardsonkg(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricerichardsonkg();  
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "after") !== FALSE) {
        pricerichardsonafter();  
         
//richardson Openings- Avail
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "infant") !== FALSE) {
        richardsonopeningsinfant(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "toddler") !== FALSE) {
        richardsonopeningstoddler(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "preschool") !== FALSE) {
        richardsonopeningspreschool(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "pre") !== FALSE) {
        richardsonopeningsprek(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kind") !== FALSE) {
        richardsonopeningskg(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kg") !== FALSE) {
        richardsonopeningskg();   
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "after") !== FALSE) {
        richardsonopeningsafter(); 

//richardson Openings- Openings
    } else if(stripos($body, "open")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "infant") !== FALSE) {
        richardsonopeningsinfant(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "toddler") !== FALSE) {
        richardsonopeningstoddler(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "preschool") !== FALSE) {
        richardsonopeningspreschool(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "pre") !== FALSE) {
        richardsonopeningsprek(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kind") !== FALSE) {
        richardsonopeningskg(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kg") !== FALSE) {
        richardsonopeningskg();   
    } else if(stripos($body, "open")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "after") !== FALSE) {
        richardsonopeningsafter();   

//richardson Openings- Space
    } else if(stripos($body, "space")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "infant") !== FALSE) {
        richardsonopeningsinfant(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "toddler") !== FALSE) {
        richardsonopeningstoddler(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "preschool") !== FALSE) {
        richardsonopeningspreschool(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "pre") !== FALSE) {
        richardsonopeningsprek(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kind") !== FALSE) {
        richardsonopeningskg(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "kg") !== FALSE) {
        richardsonopeningskg();   
    } else if(stripos($body, "space")!== FALSE && stripos($body, "richardson") !== FALSE && stripos($body, "after") !== FALSE) {
        richardsonopeningsafter();    
         
          

           






//Southlake

// southlake Pricing Specifically - Price
    } else if(stripos($body, "price") !== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricesouthlakeinfant();
    } else if(stripos($body, "price")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricesouthlaketoddler();  
    } else if(stripos($body, "price")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricesouthlakepreschool(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricesouthlakeprek(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricesouthlakekg(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricesouthlakekg(); 
    } else if(stripos($body, "price")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "after") !== FALSE) {
        pricesouthlakeafter(); 

// southlake Pricing Specifically - tuition
	} else if(stripos($body, "tuition")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricesouthlakeinfant();
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricesouthlaketoddler();  
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricesouthlakepreschool(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricesouthlakeprek(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricesouthlakekg(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricesouthlakekg(); 
    } else if(stripos($body, "tuition")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "after") !== FALSE) {
        pricesouthlakeafter();     


// southlake Pricing Specifically - rate
	} else if(stripos($body, "rate")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricesouthlakeinfant();
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricesouthlaketoddler();  
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricesouthlakepreschool(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricesouthlakeprek(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricesouthlakekg(); 
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricesouthlakekg();  
    } else if(stripos($body, "rate")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "after") !== FALSE) {
        pricesouthlakeafter();   
        
// southlake Pricing Specifically - much
	} else if(stripos($body, "much is")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "infant") !== FALSE)  {
        pricesouthlakeinfant();
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "toddler") !== FALSE) {
        pricesouthlaketoddler();  
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "preschool") !== FALSE) {
        pricesouthlakepreschool(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "pre") !== FALSE) {
        pricesouthlakeprek(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kind") !== FALSE) {
        pricesouthlakekg(); 
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kg") !== FALSE) {
        pricesouthlakekg();  
    } else if(stripos($body, "much is")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "after") !== FALSE) {
        pricesouthlakeafter();  

//southlake Openings- Avail
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "infant") !== FALSE) {
        southlakeopeningsinfant(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "toddler") !== FALSE) {
        southlakeopeningstoddler(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "preschool") !== FALSE) {
        southlakeopeningspreschool(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "pre") !== FALSE) {
        southlakeopeningsprek(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kind") !== FALSE) {
        southlakeopeningskg(); 
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kg") !== FALSE) {
        southlakeopeningskg();   
    } else if(stripos($body, "avail")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "after") !== FALSE) {
        southlakeopeningsafter(); 

//southlake Openings- Openings
    } else if(stripos($body, "open")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "infant") !== FALSE) {
        southlakeopeningsinfant(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "toddler") !== FALSE) {
        southlakeopeningstoddler(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "preschool") !== FALSE) {
        southlakeopeningspreschool(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "pre") !== FALSE) {
        southlakeopeningsprek(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kind") !== FALSE) {
        southlakeopeningskg(); 
    } else if(stripos($body, "open")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kg") !== FALSE) {
        southlakeopeningskg();   
    } else if(stripos($body, "open")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "after") !== FALSE) {
        southlakeopeningsafter();   

//southlake Openings- Space
    } else if(stripos($body, "space")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "infant") !== FALSE) {
        southlakeopeningsinfant(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "toddler") !== FALSE) {
        southlakeopeningstoddler(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "preschool") !== FALSE) {
        southlakeopeningspreschool(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "pre") !== FALSE) {
        southlakeopeningsprek(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kind") !== FALSE) {
        southlakeopeningskg(); 
    } else if(stripos($body, "space")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "kg") !== FALSE) {
        southlakeopeningskg();   
    } else if(stripos($body, "space")!== FALSE && stripos($body, "southlake") !== FALSE && stripos($body, "after") !== FALSE) {
        southlakeopeningsafter();    
              
   




         
// General Pricing
    } else if(stripos($body, "price")!== FALSE || stripos($body, "tuition")!== FALSE || stripos($body, "rate")!== FALSE || stripos($body, "much")!== FALSE) {
        price();  

    } else if(stripos($body, "pricing") !== FALSE) {
        price();
    } else if(stripos($body, "rate") !== FALSE) {
        price();
    } else if(stripos($body, "tuition") !== FALSE) {
        price();
        
//specific pricing
     } else if(stripos($body, "prices") !== FALSE) {
        price();
    
        
//others

	} else if(stripos($body, "tour") !== FALSE) {
        tour();
    } else if(stripos($body, "openings") !== FALSE || stripos($body, "capacity") !== FALSE || stripos($body, "space") !== FALSE || stripos($body, "avail") !== FALSE ) {
        schoolcapacity();
    } else if(stripos($body, "hour") !== FALSE || stripos($body, "open") !== FALSE || stripos($body, "close") !== FALSE) {
        hours();
    } else if(stripos($body, "safety") !== FALSE || stripos($body, "security") !== FALSE) {
        safety();
    } else if(stripos($body, "reg") !== FALSE) {
        registrations();
    } else if(stripos($body, "summer") !== FALSE) {
        summer();
    } else if(stripos($body, "food") !== FALSE || stripos($body, "meal") !== FALSE || stripos($body, "eat") !== FALSE || stripos($body, "breakfast") !== FALSE || stripos($body, "lunch") !== FALSE || stripos($body, "snack") !== FALSE || stripos($body, "veget") !== FALSE) {
        food();
    } else if(stripos($body, "ratio") !== FALSE) {
        ratios();
    } else if(stripos($body, "enrich") !== FALSE || stripos($body, "spanish") !== FALSE || stripos($body, "music") !== FALSE || stripos($body, "breakfast") !== FALSE || stripos($body, "yoga") !== FALSE || stripos($body, "gym") !== FALSE || stripos($body, "soccer") !== FALSE || stripos($body, "computer") !== FALSE) {
        enrichment();     
    } else if(stripos($body, "health") !== FALSE || stripos($body, "clean") !== FALSE || stripos($body, "sanit") !== FALSE) {
        health();     
    } else if(stripos($body, "curriculum") !== FALSE || stripos($body, "academic") !== FALSE || stripos($body, "learn") !== FALSE) {
        curriculum();    
    } else if(stripos($body, "part-time") !== FALSE || stripos($body, "part time") !== FALSE || stripos($body, "full time") !== FALSE || stripos($body, "full") !== FALSE || stripos($body, "half") !== FALSE) {
        schedule();    
    } else if(stripos($body, "accred") !== FALSE || stripos($body, "licen") !== FALSE) {
        accredit();  
    } else if(stripos($body, "year") !== FALSE) {
        year();    
    } else if(stripos($body, "degree") !== FALSE) {
        degree();  
    } else if(stripos($body, "bus") !== FALSE && stripos($body, "allen") !== FALSE) {
        allenbus();  
    } else if(stripos($body, "bus") !== FALSE && stripos($body, "frisco") !== FALSE) {
        friscobus();  
    } else if(stripos($body, "bus") !== FALSE && stripos($body, "richardson") !== FALSE) {
        richardsonbus();  
    } else if(stripos($body, "bus") !== FALSE && stripos($body, "southlake") !== FALSE) {
        southlakebus();  
    } else if(stripos($body, "pickup") !== FALSE && stripos($body, "allen") !== FALSE) {
        allenbus();  
    } else if(stripos($body, "pickup") !== FALSE && stripos($body, "frisco") !== FALSE) {
        friscobus();  
    } else if(stripos($body, "pickup") !== FALSE && stripos($body, "richardson") !== FALSE) {
        richardsonbus();  
    } else if(stripos($body, "pickup") !== FALSE && stripos($body, "southlake") !== FALSE) {
        southlakebus();  

 //location
    } else if(stripos($body, "loc")!== FALSE && stripos($body, "southlake") !== FALSE) {
        southlakelocation();     
    } else if(stripos($body, "loc")!== FALSE && stripos($body, "richardson") !== FALSE) {
        richardsonlocation();  
    } else if(stripos($body, "loc")!== FALSE && stripos($body, "frisco") !== FALSE) {
        friscolocation();  
    } else if(stripos($body, "loc")!== FALSE && stripos($body, "allen") !== FALSE) {
        allenlocation();        
    } else if(stripos($body, "locat") !== FALSE) {
        locations();
    } else if(stripos($body, "bus") !== FALSE) {
        bus();
    } else if(stripos($body, "joke") !== FALSE) {
        joke();
    } else if(stripos($body, "endeavor") !== FALSE) {
        endeavor();
    } else {
        index();
    }

//email
$to = "akulkarni@endeavorschools.com";
$subject = "Message from {$_REQUEST['From']}";
$message = "You have received a message from {$_REQUEST['From']}. Body: {$_REQUEST['Body']}";
$headers = "From: sms@endeavorschools.com";    
mail($to, $subject, $message, $headers);
    
    
    ?>