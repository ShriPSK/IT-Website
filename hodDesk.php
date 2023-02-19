<?php require("templates/header.php"); ?>
<!-- Content from here -->
<div class="body-start"></div>
<div class="container">
    <div class="flex-container body-start">
        <!-- <div class="flex-item body-start hod-profile"> -->
        <div class="flex-item">
            <img src="./Images/hod.webp" alt="hod-profile-image" />
            <h2><b>Dr. M R Sumalatha</b></h2>
            <p>Professor and Head<br>Department of Information Technology</p>
            <p>Madras Institute of Technology Campus</p>
            <p>Anna University, Chennai</p>
        </div>

        <!-- <div class="hod-about flex-item"> -->
        <div class="flex-item about-hod" style="padding:1.5em;">
            Welcome to the Department of Information Technology, Anna University, MIT Campus. As a well-known fact, we cannot imagine the world without information technology which has become an essential and inevitable part of our daily lives. The Department’s focus is to train our students to get strong academic knowledge in the recent trends of information technology like Artificial Intelligence, Data Analytics, Internet of Things, Social Networks, Mobile Applications, Machine Learning, and Blockchain Technology, to make the students ready to face real-world challenges. 
            The Department has a rich blend of young and highly-experienced regular and teaching-fellow faculty members, all holding Ph.D degree. The faculty members display a high level of dedication and enthusiasm towards both teaching and state-of-the-art research. 
            <br><br>
            The Department faculties have sound knowledge in emerging research areas like Mobile Computing, Internet of Things, Artificial Intelligence, Machine Learning, Augmented Reality and Virtual Reality, Image and Video Analysis, Distributed and Cloud Computing Networks and Information Security, and Data Analytics.
            Our faculty members are continuing their respective research projects and publishing their research articles in reputed national and international journals. 
            <br><br>
            The department is active in organizing various workshops and seminars for the growth and development of faculty and students’ research knowledge. The department organizes International Conference ICRTIT (International Conference in the Recent Trends of Information Technology) to motivate research students and faculty to implement their innovative research ideas and to publish in the conference. The faculty members make use of the available standard research lab facilities in the department. 
            <br><br>
            At present, the department offers two four-year undergraduate programme, B. Tech Information Technology, B.Tech Artificial Intelligence and Data Science, a two-year postgraduate programme, M.Tech Information Technology and a Ph.D programme in the faculty of Information and Communication Engineering Specializations. The focus of these curriculums are in keeping in view with the current and upcoming industry requirements as well as the challenges of the future. The graduates of our Department of Information Technology have a wide range of career opportunities in Artificial Intelligence, Web Development, Mobile Applications, and Smart Systems.
        </div>
    </div>
</div>

<style>
.flex-container {
    display: flex;
    text-align: justify;
}

.flex-item:nth-of-type(1) {
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-radius: 10px;
    padding: 0.5rem;
    margin: 0 2rem 0 0;
}

.flex-item:nth-of-type(2) {
    padding: 0.5rem;
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}

.flex-item {
    align-self: flex-start;
}

img {
    max-width: 20rem;
    margin: 0.2rem 1rem;
    border-radius: 8px;
}

@media only screen and (max-width: 768px) {
    .flex-container {
        flex-wrap: wrap;
        justify-content: center;
    }

    .flex-item:nth-of-type(1) {
        margin: 0 0 2rem 0;
    }
}
</style>
<?php require("templates/footer.php"); ?>