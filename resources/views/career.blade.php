@include('include.header')
{{-- ============================================ --}}
<section class="breadcrumb-banner"
    style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/banner/about-us-banner.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container text-center d-md-block d-sm-block d-lg-none py-5">
        <h1 class="breadcrumb-title text-white">Career</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="" class="">Home</a></li>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Career</li>
            </ol>
        </nav>
    </div>
</section>
{{-- =================================================== --}}
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class=" text-center">
                <h2>Current Requirement</h2>
                <img src="assets/images/hero/divider.png" alt="Decorative Divider" class="img-fluid mb-3"
                    style="width: 270px;">
            </div>
        </div>
    </div>
</section>
{{-- ======================================================== --}}
{{-- ========================================================== --}}
<style>
    /* Accordion Styles */
    .accordion-button {
        background-color: var(--primary-color);
        color: #fff;
        font-weight: bold;
        padding: 15px;
        border: none;
        transition: background-color 0.3s ease;
        display: flex;
        justify-content: space-between;
        /* Aligns text and experience */
        align-items: center;
        /* Centers vertically */
    }

    .accordion-button:not(.collapsed) {
        background-color: #0056b3;
        color: #fff;
    }

    .accordion-button:focus {
        box-shadow: none;
    }

    .career-item {
        border: none;
        border-radius: 5px;
        margin-bottom: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .career-body {
        background-color: #f5f5f5;
        padding: 20px;
        font-size: 16px;
        line-height: 1.6;
    }

    .career-body strong {
        color: #333;
    }

    .accordion-button:hover {
        background-color: var(--secondary-color);
        color: #fff;
    }

    .accordion-button:after {
        filter: invert(100%);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .accordion-button {
            font-size: 9px;
            padding: 8px;
        }

        .career-body {
            padding: 15px;
            font-size: 14px;
        }
       
    }
</style>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">

                    <!-- First 5 accordion items -->
                    <div class="career-item">
                        <h2 class="career-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="">
                                    <i class="fas fa-user-tie me-2 fa-2x"></i>
                                </div>
                                 Creative Graphic Designer (<span>Experience: 0-5 Years</span>)
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="career-body">
                                <strong>Job Role:</strong>
                                <p>Remote/Office Based</p>
                                <div class="py-2">
                                    <strong>JOB DESCRIPTION:</strong>
                                    <p>We are seeking a creative and talented Graphic Designer to join our dynamic team.
                                        As a Graphic Designer, you will be responsible for translating design concepts
                                        into visually appealing and innovative solutions. This role requires a keen eye
                                        for detail, strong communication skills, and the ability to collaborate with
                                        cross-functional teams.</p>
                                    <div class="py-2">
                                        <h4>JOB RESPONSIBILITIES:</h4>
                                        <ul>
                                            <li>Create visually appealing graphics, illustrations, and layouts for
                                                various digital and print materials.</li>
                                            <li>Collaborate with marketing and content teams to understand project
                                                requirements and objectives.</li>
                                            <li>Develop and maintain a consistent brand identity across all design
                                                projects.</li>
                                            <li>Stay updated on industry trends and incorporate fresh and innovative
                                                design elements into projects.</li>
                                            <li>Ensure timely delivery of high-quality design assets while meeting
                                                project deadlines.</li>
                                            <li>Work closely with clients to understand their design needs and
                                                preferences.</li>
                                        </ul>
                                    </div>

                                    <div class="py-2">
                                        <h4>SKILLS:</h4>
                                        <ul>
                                            <li>Proficient in graphic design software such as Adobe Creative Suite
                                                (Photoshop, Illustrator, InDesign).</li>
                                            <li>Solid understanding of design principles, layout, and typography.</li>
                                            <li>Strong portfolio showcasing a range of design projects.</li>
                                            <li>Excellent communication and collaboration skills.</li>
                                            <li>Ability to multitask and work on multiple projects simultaneously.</li>
                                            <li>Familiarity with the latest design trends and technologies.</li>
                                            <li>Attention to detail and a commitment to delivering high-quality design
                                                work.</li>
                                        </ul>
                                    </div>

                                    <p>0-5 years of professional experience in graphic design or a related field.
                                        Entry-level candidates with a strong portfolio are encouraged to apply.</p>
                                    <div class="py-2 bg-dark p-3">
                                        <h5>Send Your CV to: <a href="mailto:aarvisolution21@gmail.com"
                                                class="link-light">aarvisolution21@gmail.com</a> After that we Connect
                                            You</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="career-item">
                        <h2 class="career-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="">
                                    <i class="fas fa-user-tie me-2 fa-2x"></i>
                                </div>
                                Talented SEO Expert (<span>Experience: 1-10 Years</span>)

                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="career-body">
                                <strong>Job Role:</strong>
                                <p>Remote/Office Based</p>
                                <div class="py-2">
                                    <strong>JOB DESCRIPTION:</strong>
                                    <p>We are looking for a skilled SEO Expert to join our team. You will be responsible
                                        for managing SEO strategies, analyzing website performance, and improving the
                                        overall online presence of our clients.</p>
                                    <div class="py-2">
                                        <h4>JOB RESPONSIBILITIES:</h4>
                                        <ul>
                                            <li>Conduct keyword research and analysis to guide content strategy.</li>
                                            <li>Optimize website content and structure for improved search engine
                                                rankings.</li>
                                            <li>Monitor and report on SEO performance metrics.</li>
                                            <li>Collaborate with content and marketing teams to drive SEO in content
                                                creation.</li>
                                            <li>Stay updated on SEO best practices and algorithm changes.</li>
                                        </ul>
                                    </div>
                                    <div class="py-2">
                                        <h4>SKILLS:</h4>
                                        <ul>
                                            <li>Proven experience in SEO and digital marketing.</li>
                                            <li>Strong analytical skills and experience with SEO tools (e.g., Google
                                                Analytics, SEMrush).</li>
                                            <li>Excellent written and verbal communication skills.</li>
                                            <li>Ability to work independently and manage multiple projects.</li>
                                        </ul>
                                    </div>
                                    <p>1-10 years of professional experience in SEO or a related field. Candidates with
                                        a strong portfolio are encouraged to apply.</p>
                                    <div class="py-2 bg-dark p-3">
                                        <h5>Send Your CV to: <a href="mailto:aarvisolution21@gmail.com"
                                                class="link-light">aarvisolution21@gmail.com</a> After that we Connect
                                            You</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="career-item">
                        <h2 class="career-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="">
                                    <i class="fas fa-user-tie me-2 fa-2x"></i>
                                </div>
                                Web Developer (Wordpress, Frontend & Full Stack Developer) ( <span>Experience: 0-5
                                    Years</span>)

                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="career-body">
                                <strong>Job Role:</strong>
                                <p>Remote/Office Based</p>
                                <div class="py-2">
                                    <strong>JOB DESCRIPTION:</strong>
                                    <p>We are looking for an experienced Web Developer to join our team. You will be
                                        responsible for building and maintaining web applications, ensuring high
                                        performance and responsiveness to requests from the front-end.</p>
                                    <div class="py-2">
                                        <h4>JOB RESPONSIBILITIES:</h4>
                                        <ul>
                                            <li>Develop user-friendly web applications using WordPress and other
                                                technologies.</li>
                                            <li>Collaborate with designers to create and maintain a visually appealing
                                                and user-friendly site.</li>
                                            <li>Ensure the technical feasibility of UI/UX designs.</li>
                                            <li>Optimize applications for maximum speed and scalability.</li>
                                        </ul>
                                    </div>
                                    <div class="py-2">
                                        <h4>SKILLS:</h4>
                                        <ul>
                                            <li>Proficient in HTML, CSS, JavaScript, PHP, and MySQL.</li>
                                            <li>Experience with WordPress development and customization.</li>
                                            <li>Knowledge of front-end frameworks (e.g., React, Vue.js) is a plus.</li>
                                            <li>Excellent problem-solving skills and attention to detail.</li>
                                        </ul>
                                    </div>
                                    <p>0-5 years of professional experience in web development. Candidates with a strong
                                        portfolio are encouraged to apply.</p>
                                    <div class="py-2 bg-dark p-3">
                                        <h5>Send Your CV to: <a href="mailto:aarvisolution21@gmail.com"
                                                class="link-light">aarvisolution21@gmail.com</a> After that we Connect
                                            You</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="career-item">
                        <h2 class="career-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="">
                                    <i class="fas fa-user-tie me-2 fa-2x"></i>
                                </div>
                                Content Writer (<span>Experience: 0-2 Years</span>)

                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="career-body">
                                <strong>Job Role:</strong>
                                <p>Remote/Office Based</p>
                                <div class="py-2">
                                    <strong>JOB DESCRIPTION:</strong>
                                    <p>We are seeking a talented Content Writer to join our team. You will be
                                        responsible for creating engaging and informative content for various platforms,
                                        including blogs, websites, and social media.</p>
                                    <div class="py-2">
                                        <h4>JOB RESPONSIBILITIES:</h4>
                                        <ul>
                                            <li>Research and write high-quality content that meets the needs of the
                                                target audience.</li>
                                            <li>Collaborate with team members to develop content strategies.</li>
                                            <li>Edit and proofread content before publication.</li>
                                            <li>Stay updated on industry trends and topics to ensure content relevance.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="py-2">
                                        <h4>SKILLS:</h4>
                                        <ul>
                                            <li>Strong writing, editing, and proofreading skills.</li>
                                            <li>Knowledge of SEO best practices and keyword research.</li>
                                            <li>Ability to work independently and manage multiple projects.</li>
                                            <li>Familiarity with content management systems (CMS) is a plus.</li>
                                        </ul>
                                    </div>
                                    <p>0-2 years of professional experience in content writing or a related field.
                                        Candidates with a strong portfolio are encouraged to apply.</p>
                                    <div class="py-2 bg-dark p-3">
                                        <h5>Send Your CV to: <a href="mailto:aarvisolution21@gmail.com"
                                                class="link-light">aarvisolution21@gmail.com</a> After that we Connect
                                            You</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="career-item">
                        <h2 class="career-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <div class="">
                                    <i class="fas fa-user-tie me-2 fa-2x"></i>
                                </div>
                                Social Media Manager (<span>Experience: 1-5 Years</span>)

                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="career-body">
                                <strong>Job Role:</strong>
                                <p>Remote/Office Based</p>
                                <div class="py-2">
                                    <strong>JOB DESCRIPTION:</strong>
                                    <p>We are looking for a skilled Social Media Manager to manage our social media
                                        presence. You will be responsible for creating content, managing posts, and
                                        engaging with our audience across various social media platforms.</p>
                                    <div class="py-2">
                                        <h4>JOB RESPONSIBILITIES:</h4>
                                        <ul>
                                            <li>Develop and implement social media strategies to increase brand
                                                awareness.</li>
                                            <li>Create engaging content and manage social media accounts.</li>
                                            <li>Monitor social media trends and respond to audience interactions.</li>
                                            <li>Analyze performance metrics and adjust strategies accordingly.</li>
                                        </ul>
                                    </div>
                                    <div class="py-2">
                                        <h4>SKILLS:</h4>
                                        <ul>
                                            <li>Proven experience in social media management.</li>
                                            <li>Excellent written and verbal communication skills.</li>
                                            <li>Strong knowledge of social media platforms and best practices.</li>
                                            <li>Ability to analyze metrics and optimize campaigns.</li>
                                        </ul>
                                    </div>
                                    <p>1-5 years of professional experience in social media management or a related
                                        field. Candidates with a strong portfolio are encouraged to apply.</p>
                                    <div class="py-2 bg-dark p-3">
                                        <h5>Send Your CV to: <a href="mailto:aarvisolution21@gmail.com"
                                                class="link-light">aarvisolution21@gmail.com</a> After that we Connect
                                            You</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional accordion items would go here -->

                </div>
            </div>
        </div>
    </div>
</section>
@include('include.footer')
