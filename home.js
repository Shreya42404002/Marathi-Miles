let isMarathi = false;

function translateText() {
    isMarathi = !isMarathi;

    document.getElementById("nav-home").textContent = isMarathi ? "मुखपृष्ठ" : "Home";
    document.getElementById("nav-about").textContent = isMarathi ? "आमच्याविषयी" : "About";
    document.getElementById("nav-explore").textContent = isMarathi ? "अन्वेषण करा" : "Explore";
    document.getElementById("nav-contact").textContent = isMarathi ? "संपर्क" : "Contact";
    document.getElementById("nav-admin").textContent = isMarathi ? "प्रशासक" : "Admin";
    document.getElementById("brandName").textContent = isMarathi ? "मराठी माईल्स" : "Marathi Miles";
    document.getElementById("m1").textContent = isMarathi ? "मराठी माईल्स" : "Marathi Miles";

    document.getElementById("heading").innerHTML = isMarathi ? 
        "कोकणच्या <br><span>समुद्र किनाऱ्याचा जादू</span>" : 
        "Magic of <br><span>Kokan Beaches</span>";

    document.getElementById("v1").innerHTML = isMarathi ? 
        "कोकणची आकर्षक सुंदरता अन्वेषण करा: एक स्वर्ग जेथे हिरव्या टेकड्या स्वच्छ समुद्रकिनाऱ्यांमध्ये गडप होतात, आणि हवा मसाल्यांच्या आणि समुद्राच्या वाऱ्याच्या सुगंधाने भरलेली असते. विविध संस्कृती, स्वादिष्ट पदार्थ आणि अनछिद्रित नैतिक चमत्कारांचे एक सुंदर मिश्रण येथे अनुभवायला मिळते." : 
        "Explore the captivating charm of Kokan: a paradise where verdant hills cascade into pristine beaches, and the air is filled with the aroma of spices and sea breeze. Immerse yourself in a tapestry of vibrant culture, mouthwatering cuisine, and untouched natural wonders.";

        document.getElementById("headingCamping").innerHTML = isMarathi ? 
        "कॅम्पिंग <br><span>आनंद घ्या</span>" : 
        "Camping <br><span>Enjoy</span>";

    document.getElementById("v1Camping").innerHTML = isMarathi ? 
        "महाराष्ट्रातील कॅम्पिंगचा थरार अनुभव घ्या, जिथे ताऱ्यांनी सजलेले आकाश क्षितिजावर शोभून दिसते आणि निसर्गाची गोड गाणी तुम्हाला शांतीच्या स्थितीत घेऊन जातात. जंगलाच्या आलिंगनात बसा, जिथे प्रत्येक सूर्योदय साहसाची ग्वाही देतो आणि प्रत्येक सूर्यास्त काढणारे रंग मनोहर भव्यतेने चित्रित करतो." : 
        "Experience the thrill of camping in Maharashtra, where starlit skies adorn the horizon and the melody of nature lulls you into tranquility. Settle into the embrace of the wilderness, where each sunrise promises adventure and every sunset paints the landscape with hues of wonder.";

        document.getElementById("startJourneyHeading").textContent = isMarathi ? 
        "तुमचा प्रवास सुरू करा" : 
        "Start Your Journey";

    document.getElementById("startJourneyText").textContent = isMarathi ? 
        "महाराष्ट्राच्या अन्वेषित रत्ने शोधा आणि एक अविस्मरणीय साहस सुरू करा." : 
        "Explore Maharashtra's unexplored gems and embark on an unforgettable adventure.";

        document.getElementById("exploreButton").textContent = isMarathi ? 
        "आता शोधा" : 
        "Explore Now";

        document.getElementById("destHeader").textContent = isMarathi ? 
        "महाराष्ट्राचे" : 
        "Maharashtra's";

    // Translate span text
    document.getElementById("destSpan").textContent = isMarathi ? 
        "अवश्य पाहण्यायोग्य चमत्कृती" : 
        "Must-See Marvels";

        document.getElementById("fortName").textContent = isMarathi ? 
        "तोरण किल्ला" : 
        "Torna Fort";

    // Translate the fort description
    document.getElementById("fortDesc").textContent = isMarathi ? 
        "तोरण किल्ला, ज्याला प्रचंड गड असेही ओळखले जाते, हा पुणे जिल्ह्यात स्थित एक मोठा किल्ला आहे, जो महाराष्ट्र राज्यातील आहे." : 
        "Torna Fort, also known as Prachanda gad, is a large fort located in Pune district, in the Indian state of Maharashtra";

    // Translate the 'Read More' button
    document.getElementById("readMoreBtn").textContent = isMarathi ? 
        "आधी वाचा" : 
        "Read More";
    
        document.getElementById("mahabaleshwarName").textContent = isMarathi ? 
        "महाबलेश्वर" : 
        "Mahabaleshwar";

    // Translate the Mahabaleshwar description
    document.getElementById("mahabaleshwarDesc").textContent = isMarathi ? 
        "हे हिंदूंसाठी एक तीर्थक्षेत्र आहे कारण कृष्णा नदीची उत्पत्ति येथेच झाली आहे." : 
        "It is a place of pilgrimage for Hindus because the Krishna river has its origin here.";
    
        document.getElementById("readMoreBtn2").textContent = isMarathi ? 
        "आधी वाचा" : 
        "Read More";

        document.getElementById("panhalaFortName").textContent = isMarathi ? 
        "पन्हाळा किल्ला" : 
        "Panhala Fort";

    // Translate the Panhala Fort description
    document.getElementById("panhalaFortDesc").textContent = isMarathi ? 
        "पन्हाळा किल्ला कोल्हापूरच्या उत्तर-पश्चिम २० किलोमीटर अंतरावर पन्हाळा येथे स्थित आहे." : 
        "Panhala fort is located in Panhala, 20 kilometres northwest of Kolhapur in Maharashtra.";

    // Translate the 'Read More' button
    document.getElementById("readMoreBtn3").textContent = isMarathi ? 
        "आधी वाचा" : 
        "Read More";

        document.getElementById("shivneriFortName").textContent = isMarathi ? 
        "शिवनेरी किल्ला" : 
        "Shivneri Fort";

    // Translate the Shivneri Fort description
    document.getElementById("shivneriFortDesc").textContent = isMarathi ? 
        "शिवनेरी किल्ला हा पुणे जिल्ह्यात जunnar येथील १७व्या शतकातील एक सैन्य किल्ला आहे. हे छत्रपती शिवाजी महाराजांचे जन्मस्थान आहे, जे मराठा साम्राज्याचे संस्थापक होते." : 
        "Shivneri Fort is a 17th-century military fortification located near Junnar in Pune district in Maharashtra, India. It is the birthplace of Chhatrapati Shivaji Maharaj, the founder of Maratha Empire.";

    // Translate the 'Read More' button
    document.getElementById("readMoreBtn4").textContent = isMarathi ? 
        "आधी वाचा" : 
        "Read More";

        document.getElementById("aboutTitle").textContent = isMarathi ? 
        "आपल्या बद्दल" : 
        "About Us";

    // Translate the first paragraph
    document.getElementById("aboutUsPara1").textContent = isMarathi ? 
        "मराठी मैल्समध्ये आपले स्वागत आहे! आम्ही महाराष्ट्र, भारताच्या आकर्षक राज्याचा दारात आहोत. महाराष्ट्राच्या समृद्ध संस्कृती, वारसा, आणि नैसर्गिक सौंदर्याची गोडी असल्याने, आम्ही या प्रदेशातील सर्वोत्तम गोष्टी प्रदर्शित करण्यास वचनबद्ध आहोत." : 
        "Welcome to Marathi Miles! We are your gateway to the enchanting state of Maharashtra, India. With a deep-rooted love for Maharashtra's rich culture, heritage, and natural beauty, we are committed to showcasing the best this region has to offer.";

    // Translate the second paragraph
    document.getElementById("aboutUsPara2").textContent = isMarathi ? 
        "आमच्या टीममध्ये स्थानिक तज्ञ, प्रवास उत्साही, आणि सांस्कृतिक प्रेमी आहेत जे महाराष्ट्राच्या विविध लँडस्केप्स, जीवन्त शहरां, आणि आकर्षक इतिहासावर आधारित अनुभव तयार करण्याच्या बाबतीत उत्साही आहेत." : 
        "Our team comprises local experts, travel enthusiasts, and cultural aficionados who are passionate about curating immersive experiences that highlight Maharashtra's diverse landscapes, vibrant cities, and captivating history.";

        document.getElementById("completedTripsText").textContent = isMarathi ? 
        "पूर्ण केलेल्या सहली" : 
        "completed trips";

    // Translate the tour guides section
    document.getElementById("tourGuidesText").textContent = isMarathi ? 
        "पर्यटन मार्गदर्शक" : 
        "Tour Guides";

    // Translate the destinations section
    document.getElementById("destinationsText").textContent = isMarathi ? 
        "स्थळे" : 
        "Destinations";

        document.getElementById("albumTitle").textContent = isMarathi ? 
        "आमचे अल्बम" : 
        "Our Album";

    // Translate the album subtitle
    document.getElementById("albumSubtitle").textContent = isMarathi ? 
        "आमच्याकडे सर्वोत्तम फोटोग्राफर्स आहेत, जे तुमच्या वैयक्तिक छायाचित्रांची क्लिक करू इच्छित आहेत!" : 
        "We have best Photographers wait you for take your personnel pictures!";

        document.getElementById("contactTitle").textContent = isMarathi ? 
        "आमच्याशी संपर्क साधा" : 
        "Contact Us";

    // Translate the contact subtitle
    document.getElementById("contactSubtitle").textContent = isMarathi ? 
        "आम्ही २४ तासांच्या आत उत्तर देण्यास सक्षम आहोत. आम्ही वीकेंडमध्ये देखील काम करतो." : 
        "We are able to replay within 24 hours. We work in weekend also";

        document.getElementById("callUs").textContent = isMarathi ? 
        "आमच्याशी संपर्क साधा" : 
        "Call us";

    document.getElementById("phone1").textContent = isMarathi ? 
        "+91७२१९५७५१४८" : 
        "+917219575148";
    
    document.getElementById("phone2").textContent = isMarathi ? 
        "+91७२४९०२७६५५" : 
        "+917249027655";

        document.getElementById("mailUsTitle").textContent = isMarathi ? "आम्हाला मेल करा" : "Mail us";
    
        // You can translate the email as well if needed, or keep it as is
        document.getElementById("email").textContent = isMarathi ? "marathimiles@travel.com" : "marathimiles@travel.com";
    
  document.getElementById("nameInput").placeholder = isMarathi ? "तुमचं नाव" : "Your Name";
  document.getElementById("emailInput").placeholder = isMarathi ? "तुमचा ईमेल" : "Your Email";
  document.getElementById("phoneInput").placeholder = isMarathi ? "तुमचा फोन नंबर" : "Your Phone";
  document.getElementById("feedbackInput").placeholder = isMarathi ? "तुमचा अभिप्राय" : "Your Feedback";
  document.getElementById("submitBtn").textContent = isMarathi ? "अभिप्राय पाठवा!" : "Send Feedback!";
}
let scrollTimeout;
const btn = document.getElementById("translateBtn");

window.addEventListener("scroll", () => {
    btn.style.opacity = "0"; // hide button while scrolling

    clearTimeout(scrollTimeout);

    scrollTimeout = setTimeout(() => {
        btn.style.opacity = "1"; // show button after scrolling stops
    }, 300); // 300ms after scroll stops
});


