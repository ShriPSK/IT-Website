<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Images/annaUniv.svg">
    <title>Department of Information Technology | MIT Campus, Anna University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>

    

    
    <link rel="stylesheet" href="./CSS/navigator.css">
    <link rel="stylesheet" href="./CSS/navigatorMedia.css">
    <link rel="stylesheet" href="./CSS/studentAwards.css">
    <link rel="stylesheet" href="./CSS/phd.css">    
    <link rel="stylesheet" href="./CSS/facultyAchivements.css">
    
    <link rel="stylesheet" href="./CSS/books.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">
</head>

<body>
    <!-- Image and text -->

    <header>

        <div class="container">
            <div class="row">
                <div class="col-1">
                    <img src="./Images/annaUniv.svg" alt="">    
                </div>
                <div class="col-9">
                    <div class="heading">
                        <div class="heading-title">Department of  Information  Technology</div>
                        <div class="heading-dept">Anna University , MIT Campus</div>
                    </div>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-light" style="background-color:#06283d;border: none;"><a href="./Login/login.php" style="text-decoration: none;color: white;">Login</a></button>
                </div>
            </div>
        </div>
        <input type="checkbox" style="display:none" id="nav-toggle" class="nav-toggle">

        <nav>
            <a href="./">
                <i class="bi bi-house-door-fill"></i>
                Home
            </a>
            <a href="./vision-mission.php">
                <i class="bi bi-person"></i>
                Vision &amp; Mission
            </a>
            <a href="./hodDesk.php">
                <i class="bi bi-person-rolodex"></i>
                HOD's message
            </a>
            <div class="parent" style="z-index:6;">
                <div>People</div> 
                <div class="child-1">                
                    
                    <a href="./faculties.php">
                        <i class="bi bi-people-fill"></i>
                        Teaching  Staff
                    </a>
                    <a href="./facultiesTech.php">
                        <i class="bi bi-person-badge"></i>
                        Technical & Administrative Staff 
                    </a>
                    <a href="./students.php">
                        <i class="bi bi-person-video2"></i>
                        Students
                    </a>
                    
                </div>
                
            </div>
            <!--
            <a href="./infrastructure.php">
                <i class="bi bi-building"></i>
                Infrastructure
            </a> -->
            <div class="parent" style="z-index:5;">
                <div>Infrastructure</div> 
                <div class="child-1">
                    <a href="./infrastructureLab.php" ><i class="bi bi-award"></i>Laboratories</a>
                    <a href="./infrastructureComputing.php" ><i class="bi bi-award"></i>Computing Facilities</a>
                    <a href="./infrastructureAcademics.php" ><i class="bi bi-award"></i>Academic Facilities</a>
                </div>
                
            </div>            
            <div class="parent" style="z-index:4;">
                <div>Academics</div> 
                <div class="child-1">                
                    <a href="./academics.php"><i class="bi bi-book-half"></i>Courses Offered</a>
                    <div class="child-1-parent">
                        Regulations</i>
                        <div class="child-2">   
                            <div class="child-2-parent">
                                UG</i>
                                <div class="child-3">
                                    <a href="https://cac.annauniv.edu/udregulations/00.%20UG%20Reg%202019.pdf">R-2019</a>
                                    <a href="https://cac.annauniv.edu/udregulations/00.%20UG%20Reg-2015%20(Final)%20-%2028.01.2019.pdf">R-2015</a>
                                    <a href="https://cac.annauniv.edu/udregulations/bebtech2013pt.pdf">R-2013</a>
                                </div>
                            </div>
                            <a href="https://cac.annauniv.edu/uddetails/udug_2019/AmmendII/FICE/B.Tech.AI&DS%20-%20I%20&%20II.pdf">UG- AI & DS</a> 
                            <div class="child-2-parent">
                                PG</i>
                                <div class="child-3">
                                    <a href="https://cac.annauniv.edu/udregulations/01.%20PG%20Reg%20-%20R-2019.pdf">R-2019</a>
                                    <a href="https://cac.annauniv.edu/udregulations/01.%20PG%20Reg%20-%2001.09.17%20(WS)%20-%2028.01.2019.pdf">R-2015</a>
                                    <a href="https://cac.annauniv.edu/udregulations/R2013PG.pdf">R-2013</a>
                                </div>
                            </div>           
                        </div>
                    </div>
                    <div class="child-1-parent">
                        Curriculum and Syllabi</i>
                        <div class="child-2">   
                            <div class="child-2-parent">
                                UG-IT</i>
                                <div class="child-3">
                                    <a href="https://cac.annauniv.edu/uddetails/udug_2019/AmmendII/FICE/B.Tech.%20IT.pdf">R-2019</a>
                                    <a href="https://cac.annauniv.edu/uddetails/udug_2015/18.IT%20final.pdf">R-2015</a>
                                    <a href="https://cac.annauniv.edu/uddetails/udug_2013pt/IT.pdf">R-2013</a>
                                </div>
                            </div>
                            <a href="https://cac.annauniv.edu/uddetails/udug_2019/AmmendII/FICE/B.Tech.AI&DS%20-%20I%20&%20II.pdf">UG- AI & DS</a> 
                            <div class="child-2-parent">
                                PG</i>
                                <div class="child-3">
                                    <a href="https://cac.annauniv.edu/uddetails/udpg_2019/ice/11.%20M.Tech%20IT.pdf">R-2019</a>
                                    <a href="https://cac.annauniv.edu/uddetails/udpg_2015/47.M.Tech%20IT-.pdf">R-2015</a>
                                    <a href="https://cac.annauniv.edu/uddetails/udpg_2013/11.%20IT%20%20-%20replace%20on%2020.01.15.pdf">R-2013</a>
                                </div>
                            </div>            
                        </div>
                    </div>
                    <div class="child-1-parent">
                        Teaching And Learning</i>
                        <div class="child-2">   
                        <a href="./videoLectures.php"><i class="bi bi-file-earmark-play"></i> Video Lectures</a>
                        </div>
                    </div>
                    <a href="./curriculumFeedback.php"><i class="bi bi-list-columns-reverse"></i> Curriculum Feedback</a>
                    
                </div>
                
            </div>
            <div class="parent" style="z-index:3;">
                <div>Research & Innovation</i></div> 
                <div class="child-1">                
                    <a href="./patent.php" class="dropdown-item"><i class="bi bi-newspaper"></i> Patent </a>
                    <a href="./trustAreas.php" class="dropdown-item"><i class="bi bi-motherboard-fill"></i> Research Trust Areas</a>
                    <a href="./research.php" class="dropdown-item"><i class="bi bi-cast"></i> Sponsored & CTDT projects </a>
                    <a href="./phd.php" class="dropdown-item"><i class="bi bi-mortarboard"></i> List of Scholars awarded Ph.D</a>                            
                    <a href="./books.php" class="dropdown-item"><i class="bi bi-book"></i> Books Published</a>            
                </div>
                
            </div>                        
            <div class="parent" style="z-index:2;">
                <div>Events</i></div> 
                <div class="child-1">                
                    <div class="child-1-parent">
                        Student Events</i>
                        <div class="child-2">
                            <a href="./studentAssociation.php"><i class="bi bi-puzzle"></i> Student Association</a>
                            <a href="./studentProjects.php"><i class="bi bi-lightbulb"></i> Student Projects</a>
                            <a href="./studentsInterInstitute.php"><i class="bi bi-calendar-event"></i> Inter-Institute Events</a>
                            <a href="./placements.php"><i class="bi bi-person-check"></i> Placements</a>  
                        </div>
                    </div>
                    <div class="child-1-parent">
                        Faculty Events</i>
                        <div class="child-2">                              
                            <a href="./conferences.php"><i class="bi bi-book-half"></i> Conferences Attended</a>
                            <a href="./journals.php"><i class="bi bi-journal-text"></i> Journals Published</a>
                            <a href="./fdp.php"><i class="bi bi-braces"></i> Faculty Development Program</a>                                    
                        </div>
                    </div>
                    <a href="./contributionTowardsSociety.php">Contribution Towards Society</a>
                </div>
                
            </div>
            <div class="parent" style="z-index:1;">
                <div>Awards</i></div> 
                <div class="child-1">
                    <a href="./studentAchievements.php" ><i class="bi bi-award"></i> Student Awards</a>
                    <div class="child-1-parent">
                        Faculty Awards</i>
                        <div class="child-2">
                            <a href="./facultyAchievements.php" ><i class="bi bi-award-fill"></i> Faculty Awards</a>
                            <a href="./facultyForeign.php"><i class="bi bi-globe"></i> Foreign visit</a>  
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="parent" style="z-index:6;background-color: #ff322e;width:5%; justify-content: center; border-radius: 5%;">
                <div>Circulars</div> 
                <div class="child-1">                
                    
                    <a href="./Circulars/staffCirculars.php">
                        <i class="bi bi-people-fill"></i>
                        Staff Circulars
                    </a>
                    <a href="./Circulars/studentCirculars.php">
                        <i class="bi bi-person-badge"></i>
                        Student Circulars
                    </a>
                    <a href="./Circulars/examinationCirculars.php">
                        <i class="bi bi-person-video2"></i>
                        Examination Circulars
                    </a>
                    <a href="./Circulars/generalCirculars.php">
                        <i class="bi bi-newspaper"></i>
                        General Circulars
                    </a>
                </div>
                
            </div>
            <a href="./gallery.php">
                <i class="bi bi-card-image"></i>
                Gallery
            </a>
            <a href="./e-service.php">
                <i class="bi bi-pc-display-horizontal"></i>
                E-Service
            </a>
        </nav>
        <label for="nav-toggle">
            <span></span><i class="bi bi-x-lg"></i>
        </label> 
    </header>
