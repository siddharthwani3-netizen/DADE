<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Select your school and course to start your AI mock interview practice">
    <meta name="author" content="Digi Academy">
    <meta name="theme-color" content="#1147E9">
    
    <title>DADE - Select School & Course</title>
    
    <!-- External CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/dade.css">
</head>
<body>
    <main>
        <!-- Navigation Header -->
        <header class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="../index.php" class="btn btn-back" aria-label="Go back to login">
                            <i class="fa-solid fa-rotate-left"></i><span>Back</span>
                        </a>
                    </div>
                    <div class="col-sm-8 center-content">
                        <img src="../assets/images/digi-logo.svg" class="dade-logo" alt="Digi Academy Logo">
                    </div>
                    <div class="col-sm-2">
                        <a href="../index.php" class="btn btn-logout" aria-label="Logout and return to login">
                            <span>Logout</span><i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="page-content">
            <div class="center-content">
                <h1 class="page-title">AI Tool For Mock Interview</h1>
                <p class="page-subtitle">Choose the track closest to your target role and begin a guided mock interview.</p>
            </div>

            <!-- School of Marketing -->
            <section class="school-section">
                <div class="center-content">
                    <h2 class="school-title">School of Marketing</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">PGDM</h3>
                                <p class="course-description">Practice marketing management, HR and business interview questions</p>
                                <a href="instructions.php?course=pgdm" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">MBA</h3>
                                <p class="course-description">Prepare for MBA-level business marketing and leadership interviews</p>
                                <a href="instructions.php?course=mba" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">MDM</h3>
                                <p class="course-description">Mock interview practice for marketing and digital management roles</p>
                                <a href="instructions.php?course=mdm" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- School of Tech -->
            <section class="school-section">
                <div class="center-content">
                    <h2 class="school-title">School of Tech</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">DSML</h3>
                                <p class="course-description">Data Science and Machine Learning interview preparation</p>
                                <a href="instructions.php?course=dsml" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">DSMLAI</h3>
                                <p class="course-description">Advanced AI and Machine Learning interview practice</p>
                                <a href="instructions.php?course=dsmlai" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">FSD</h3>
                                <p class="course-description">Full Stack Development interview practice with coding and HR questions</p>
                                <a href="instructions.php?course=fsd" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- School of Design -->
            <section class="school-section">
                <div class="center-content">
                    <h2 class="school-title">School of Design</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">MMGD</h3>
                                <p class="course-description">Interview practice for multimedia, motion graphics and design roles</p>
                                <a href="instructions.php?course=mmgd" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">VEA</h3>
                                <p class="course-description">Prepare for video editing, animation and creative media interviews</p>
                                <a href="instructions.php?course=vea" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="dade-card course-card">
                                <h3 class="course-name">MGD</h3>
                                <p class="course-description">Mock interview practice for media, graphics and design careers</p>
                                <a href="instructions.php?course=mgd" class="btn btn-start-interview">Start Interview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-brand">
                <img src="../assets/images/digi-logo.svg" alt="Digi Academy Logo">
                <span>AI Mock Interview Platform</span>
            </div>
            <nav class="footer-links" aria-label="Footer navigation">
                <a href="../index.php">Home</a>
                <a href="instructions.php">Instructions</a>
                <a href="results.php">Results</a>
            </nav>
            <div class="footer-social" aria-label="Social links">
                <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../assets/js/dade.js"></script>
</body>
</html>
