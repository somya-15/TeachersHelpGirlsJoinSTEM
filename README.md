# TeachersHelpGirlsJoinSTEM

## Inspiration
“The most important  thing that the teachers can do while they  are meeting online with the students is to  connect with them emotionally” 
~Ruxandra Mercea

Learning research indicates that people learn better in the presence of some emotional connection—to the content or to other people. Creating this emotional connection is particularly challenging in the online classroom, where most communication is asynchronous and lacks many of the emotional cues of the face-to-face environment.
Teachers with autism can need special aid to recognize the emotions of their students. Similarly, students with autism and expressive introversion need aid to express themselves to the teachers in online classes.
Also, women in STEM can be promoted by supporting our girls at the right time when they need help and clarity in these domains to grasp in-depth knowledge straight from elementary-level education. 

## What it does
This is a website empowered by Computer Vision based Sentiment Analysis to help assess the emotions and psychology of a child, especially when they attempt to solve challenging problems or try to understand advanced concepts. Based on the emotions of the child, if they show signs of under-confidence, irritation or anger, we provide systematic help by detailed analysis over a period of time set by the teacher and sending the detailed report of the student study session to the teacher. This helps the teacher understand the areas where the student was feeling uncomfortable in understanding and using the drill-down reports of the student study sessions the teachers can ensure that the student's learning rate does not fall down. 

## How we built it
The front end of the web application is built with HTML, CSS and Javascript. The emotion recognition is built using ml5.js face API to do real-time face detection through a webcam. I implement detection rectangle, face landmarks, and displaying emotion estimation. The detailed data analysis report is sent to the teacher on a timely basis(as decided by the teacher) via SMS which is implemented using Twilio SMS API using PHP.

## Challenges we ran into
The main challenge was to design the education portal for students to make them feel comfortable while studying in front of a camera. Hence, the use of face landmarks plot on the same page made it look fun and so the efforts did prove to be worth it. 

## Accomplishments that we're proud of
Learning about face-api and integrating it with the education portal was a technically interesting task. This was the first time I used p5.js and did a machine leaning/computer vision task in javascript instead of python. Building this empowering platform to help under-confident students gain their confidence back into STEM in a way that is systematic and fun, along with helping the teachers to better connect with their students is my biggest accomplishment.

## What we learned
To never give up when the code is not working, and keep looking for the solution with patience. I also learnt a lot about face-api and twilio SMS API using PHP. 

## What's next for Teaching from Heart
1. NLP based Sentiment Analysis
2. Graphical Data Visualisation dashboard for teachers of the student emotions per study session

<img width="1440" alt="Screenshot 2022-09-25 at 12 34 39 PM" src="https://user-images.githubusercontent.com/73076997/192139627-67e021a8-0d9f-458f-a8e3-2740dd94352e.png">

<img width="834" alt="graph" src="https://user-images.githubusercontent.com/73076997/192139613-d99ed5eb-53fc-4b48-8352-5b594549e093.png">

## Project SetUp
Fork the github/somya-15/TeachersHelpGirlsJoinSTEM repo
You'll be making your own copy of the "TeachersHelpGirlsJoinSTEM website starter" repository so you have your own project to customize. A "fork" is a copy of a repository. So select "Fork" atop the github/somya-15/TeachersHelpGirlsJoinSTE.

Once you've found a home for your forked repository, it's yours. You're the owner, so you're ready to publish, if you wish.

Install in your local development environment
If you want to manage your website in a local web development environment, you'll be using Ruby.

Once you've found a home for your forked repository, **[clone it](https://github.com/somya-15/TeachersHelpGirlsJoinSTEM/cloning-a-repository/)**..
