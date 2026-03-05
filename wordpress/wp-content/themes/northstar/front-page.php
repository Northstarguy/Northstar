<?php
/**
 * Front page template.
 *
 * @package Northstar
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main id="main-content">
    <section id="home" class="hero" aria-labelledby="northstar-title">
        <canvas class="sparkle-layer" id="sparkle-layer"></canvas>
        <div class="container hero-grid">
            <div>
                <p><strong><?php esc_html_e('Northstar Mentorship Network', 'northstar'); ?></strong></p>
                <h1 id="northstar-title"><?php esc_html_e('Every young person deserves a clear direction, a trusted guide, and a future they can own.', 'northstar'); ?></h1>
                <p><?php esc_html_e('Northstar was created to bridge the gap between potential and opportunity. We combine identity-building, mentorship, and workplace-readiness so youth move from uncertainty to confidence, from ideas to action, and from dreams to real outcomes.', 'northstar'); ?></p>
                <p><?php esc_html_e('Recent youth-development data consistently shows that students with stable mentoring relationships are more likely to stay engaged in school, build stronger social-emotional skills, and prepare for career pathways. Northstar turns those findings into a practical system communities can deploy quickly.', 'northstar'); ?></p>
                <div style="display:flex;gap:.8rem;flex-wrap:wrap;margin-top:1rem">
                    <a class="btn btn-primary" href="#donate"><?php esc_html_e('Power a Student Journey', 'northstar'); ?></a>
                    <a class="btn btn-secondary" href="#mentoring"><?php esc_html_e('Explore Mentoring Model', 'northstar'); ?></a>
                </div>
            </div>
            <aside class="hero-card" aria-label="Program impact overview">
                <h2><?php esc_html_e('Northstar by the Numbers', 'northstar'); ?></h2>
                <div class="stats-grid">
                    <div class="panel"><p class="kpi">3x</p><p class="kpi-label"><?php esc_html_e('Lead and outreach conversion focus', 'northstar'); ?></p></div>
                    <div class="panel"><p class="kpi">12+</p><p class="kpi-label"><?php esc_html_e('Structured mentorship session tracks', 'northstar'); ?></p></div>
                    <div class="panel"><p class="kpi">100%</p><p class="kpi-label"><?php esc_html_e('Built with security, speed, and SEO best practices', 'northstar'); ?></p></div>
                </div>
                <p><?php esc_html_e('Mission: Equip youth with clarity, confidence, and career-ready habits while strengthening families, schools, and community partners.', 'northstar'); ?></p>
            </aside>
        </div>
    </section>

    <section class="section" aria-labelledby="why-title">
        <div class="container">
            <h2 id="why-title"><?php esc_html_e('Why Northstar Exists', 'northstar'); ?></h2>
            <p class="section-intro"><?php esc_html_e('Too many students face adulthood without guidance, self-awareness, or real-world preparation. Northstar responds with a proven framework that helps youth discover identity, practice leadership, and build employability before graduation.', 'northstar'); ?></p>
            <div class="value-grid">
                <article class="panel"><h3><?php esc_html_e('Identity & Confidence', 'northstar'); ?></h3><p><?php esc_html_e('Self-evaluation modules help students identify strengths, values, and personal direction.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Mentor-Led Growth', 'northstar'); ?></h3><p><?php esc_html_e('Trained mentors deliver high-impact sessions with measurable outcomes each cycle.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Workforce Readiness', 'northstar'); ?></h3><p><?php esc_html_e('Students practice communication, accountability, and goal planning for life after school.', 'northstar'); ?></p></article>
            </div>
        </div>
    </section>

    <section id="mentoring" class="section" aria-labelledby="mentoring-title">
        <div class="container">
            <h2 id="mentoring-title"><?php esc_html_e('Mentoring Program: Clear, Powerful, and Built to Scale', 'northstar'); ?></h2>
            <p class="section-intro"><?php esc_html_e('Our mentoring experience is designed like a guided constellation: simple to follow, deeply personal, and strong enough for school-wide implementation.', 'northstar'); ?></p>
            <div class="offer-grid">
                <article class="panel"><h3><?php esc_html_e('Outreach Kits', 'northstar'); ?></h3><p><?php esc_html_e('Ready-to-send email scripts for students, families, and faculty to increase early buy-in.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Mentor + Mentee Training', 'northstar'); ?></h3><p><?php esc_html_e('Easy onboarding sessions that create confident mentors and engaged student participants.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Session Agendas That Drive Progress', 'northstar'); ?></h3><p><?php esc_html_e('Turn-key outlines with prompts, outcomes, and milestone checkpoints.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Attendance Automation', 'northstar'); ?></h3><p><?php esc_html_e('Tier-based attendance calendars, auto-send options, and fast recap templates.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Coordination Add-On', 'northstar'); ?></h3><p><?php esc_html_e('Optional full automation for mentor scheduling, reminders, and communication flow.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Legal & Compliance Bundle', 'northstar'); ?></h3><p><?php esc_html_e('Student agreements, guardian forms, and program documentation packaged and ready.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Personalized Invitations', 'northstar'); ?></h3><p><?php esc_html_e('Targeted invitations that make each student feel chosen and supported from day one.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Progress Reporting', 'northstar'); ?></h3><p><?php esc_html_e('Midterm updates plus end-of-term reports with participation, metrics, and insights.', 'northstar'); ?></p></article>
                <article class="panel"><h3><?php esc_html_e('Northstar Assessment + Opportunity Navigator', 'northstar'); ?></h3><p><?php esc_html_e('Baseline and closing assessments with optional next-step recommendations tied to each student’s interests.', 'northstar'); ?></p></article>
            </div>
        </div>
    </section>

    <section id="donate" class="section" aria-labelledby="donate-title">
        <div class="container">
            <h2 id="donate-title"><?php esc_html_e('Donate: Fuel Better Outcomes', 'northstar'); ?></h2>
            <p class="section-intro"><?php esc_html_e('Your support funds mentor training, youth resources, and measurable student impact. Every contribution helps a student move from potential to purpose.', 'northstar'); ?></p>
            <div class="steps-grid">
                <div class="panel"><h3><?php esc_html_e('Step 1: Choose Your Impact', 'northstar'); ?></h3><p><?php esc_html_e('Sponsor an individual student, a classroom cohort, or a full campus initiative.', 'northstar'); ?></p></div>
                <div class="panel"><h3><?php esc_html_e('Step 2: Receive Transparency', 'northstar'); ?></h3><p><?php esc_html_e('Get clear reporting on attendance, growth outcomes, and mentorship engagement.', 'northstar'); ?></p></div>
                <div class="panel"><h3><?php esc_html_e('Step 3: Build Lasting Change', 'northstar'); ?></h3><p><?php esc_html_e('Help shape a future where youth are guided, prepared, and connected to opportunity.', 'northstar'); ?></p></div>
            </div>
            <p><a class="btn btn-primary" href="https://donate.stripe.com/test_00g14k9T6eVd6sM3cc" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Donate Securely', 'northstar'); ?></a></p>
        </div>
    </section>

    <section id="contact" class="section" aria-labelledby="contact-title">
        <div class="container">
            <h2 id="contact-title"><?php esc_html_e('Contact Northstar', 'northstar'); ?></h2>
            <p class="section-intro"><?php esc_html_e('Partner with us to bring high-impact mentorship to your school, district, or community network.', 'northstar'); ?></p>
            <form class="panel" method="post" action="#" aria-label="Northstar contact form">
                <div class="form-grid">
                    <label><?php esc_html_e('Full Name', 'northstar'); ?><input name="name" type="text" required></label>
                    <label><?php esc_html_e('Organization', 'northstar'); ?><input name="organization" type="text"></label>
                    <label><?php esc_html_e('Email', 'northstar'); ?><input name="email" type="email" required></label>
                    <label><?php esc_html_e('Phone', 'northstar'); ?><input name="phone" type="tel"></label>
                </div>
                <label><?php esc_html_e('How can we support your youth mentorship goals?', 'northstar'); ?><textarea name="message" required></textarea></label>
                <p><button class="btn btn-primary" type="submit"><?php esc_html_e('Request a Discovery Call', 'northstar'); ?></button></p>
            </form>
        </div>
    </section>
</main>
<?php
get_footer();
