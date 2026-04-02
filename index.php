<?php
$companyName = "Asterion Dynamics";
$tagline = "Reliable systems for ambitious businesses.";
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($companyName); ?> | Landing Page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --bg: #f4f6f8;
      --surface: #ffffff;
      --surface-soft: #eef2f5;
      --text: #17212b;
      --muted: #55606c;
      --primary: #1f5a86;
      --primary-strong: #0f3f65;
      --accent: #d1a15a;
      --border: #dbe2e8;
      --shadow: 0 20px 45px rgba(23, 33, 43, 0.12);
      --radius: 20px;
      --container: 1120px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Manrope", sans-serif;
      color: var(--text);
      background:
        radial-gradient(circle at 10% 5%, rgba(31, 90, 134, 0.08), transparent 35%),
        radial-gradient(circle at 90% 0%, rgba(209, 161, 90, 0.12), transparent 30%),
        var(--bg);
      line-height: 1.6;
    }

    .wrap {
      width: min(var(--container), 92vw);
      margin: 0 auto;
    }

    header {
      padding: 26px 0;
      position: sticky;
      top: 0;
      z-index: 10;
      backdrop-filter: blur(8px);
      background: rgba(244, 246, 248, 0.85);
      border-bottom: 1px solid rgba(219, 226, 232, 0.6);
    }

    .nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
    }

    .brand {
      font-weight: 800;
      letter-spacing: 0.4px;
      font-size: 1.15rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .brand-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      box-shadow: 0 0 0 8px rgba(31, 90, 134, 0.12);
    }

    .nav-links {
      display: flex;
      gap: 18px;
      flex-wrap: wrap;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      color: var(--muted);
      font-weight: 600;
      font-size: 0.95rem;
      transition: color 0.25s ease;
    }

    .auth-links {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .auth-btn {
      text-decoration: none;
      padding: 9px 16px;
      border-radius: 999px;
      font-weight: 700;
      font-size: 0.9rem;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .signin-btn {
      color: var(--primary-strong);
      border: 1px solid rgba(15, 63, 101, 0.35);
      background: #ffffff;
    }

    .signin-btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 18px rgba(15, 63, 101, 0.12);
    }

    .signup-btn {
      color: #ffffff;
      background: linear-gradient(135deg, var(--accent), #ad7a33);
      box-shadow: 0 10px 22px rgba(173, 122, 51, 0.28);
    }

    .signup-btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 13px 24px rgba(173, 122, 51, 0.34);
    }

    .nav-links a:hover {
      color: var(--primary);
    }

    .cta-btn {
      text-decoration: none;
      background: linear-gradient(135deg, var(--primary), var(--primary-strong));
      color: #fff;
      padding: 10px 18px;
      border-radius: 999px;
      font-weight: 700;
      font-size: 0.92rem;
      box-shadow: 0 12px 26px rgba(15, 63, 101, 0.28);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .cta-btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 15px 28px rgba(15, 63, 101, 0.34);
    }

    .hero {
      padding: 78px 0 56px;
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 30px;
      align-items: center;
    }

    .hero h1 {
      font-family: "Playfair Display", serif;
      font-size: clamp(2rem, 4.2vw, 3.6rem);
      line-height: 1.12;
      margin-bottom: 14px;
    }

    .hero p {
      color: var(--muted);
      max-width: 58ch;
      margin-bottom: 28px;
      font-size: 1.02rem;
    }

    .hero-actions {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
    }

    .btn-outline {
      text-decoration: none;
      color: var(--primary-strong);
      border: 1px solid var(--primary);
      padding: 10px 18px;
      border-radius: 999px;
      font-weight: 700;
      background: #fff;
    }

    .hero-card {
      background: linear-gradient(160deg, #ffffff, #edf3f8);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 24px;
      box-shadow: var(--shadow);
      animation: floatIn 0.8s ease forwards;
    }

    .hero-card h3 {
      font-size: 1.05rem;
      margin-bottom: 14px;
    }

    .metric-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(110px, 1fr));
      gap: 14px;
    }

    .metric {
      background: var(--surface);
      border-radius: 14px;
      padding: 14px;
      border: 1px solid var(--border);
    }

    .metric strong {
      font-size: 1.25rem;
      display: block;
      margin-bottom: 3px;
      color: var(--primary-strong);
    }

    .section {
      padding: 50px 0;
    }

    .section h2 {
      font-size: clamp(1.45rem, 3vw, 2.3rem);
      margin-bottom: 16px;
      font-family: "Playfair Display", serif;
    }

    .section-intro {
      color: var(--muted);
      max-width: 70ch;
      margin-bottom: 24px;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 18px;
    }

    .value-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 20px;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .value-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 32px rgba(23, 33, 43, 0.1);
    }

    .value-card h3 {
      margin-bottom: 8px;
      font-size: 1.05rem;
      color: var(--primary-strong);
    }

    .value-card p {
      color: var(--muted);
      font-size: 0.95rem;
    }

    .showcase {
      background: linear-gradient(120deg, #10293d, #1a3f5f);
      color: #f7fbff;
      border-radius: 24px;
      padding: 34px;
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 20px;
      align-items: center;
      margin-top: 14px;
    }

    .showcase p {
      color: #d4e2ef;
    }

    .showcase .cta-btn {
      background: linear-gradient(135deg, var(--accent), #ad7a33);
      box-shadow: 0 12px 26px rgba(0, 0, 0, 0.28);
    }

    footer {
      padding: 36px 0 42px;
      color: #6b7680;
      font-size: 0.93rem;
    }

    .fade-up {
      opacity: 0;
      transform: translateY(16px);
      animation: fadeUp 0.75s ease forwards;
    }

    .fade-up.d2 { animation-delay: 0.15s; }
    .fade-up.d3 { animation-delay: 0.3s; }

    @keyframes fadeUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes floatIn {
      from {
        opacity: 0;
        transform: translateY(20px) scale(0.98);
      }
      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    @media (max-width: 940px) {
      .hero {
        grid-template-columns: 1fr;
      }

      .values-grid {
        grid-template-columns: 1fr 1fr;
      }

      .showcase {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 620px) {
      .nav {
        flex-direction: column;
        align-items: flex-start;
      }

      .values-grid {
        grid-template-columns: 1fr;
      }

      .hero {
        padding-top: 52px;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="wrap nav">
      <div class="brand">
        <span class="brand-dot" aria-hidden="true"></span>
        <?php echo htmlspecialchars($companyName); ?>
      </div>
      <nav class="nav-links" aria-label="Main navigation">
        <a href="#about">About</a>
        <a href="#values">Values</a>
        <a href="#impact">Impact</a>
        <a class="cta-btn" href="#contact">Contact Us</a>
        <div class="auth-links" aria-label="Authentication">
          <a class="auth-btn signin-btn" href="#signin">Sign In</a>
          <a class="auth-btn signup-btn" href="#signup">Sign Up</a>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <section class="wrap hero" id="about">
      <div>
        <p class="fade-up" style="font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:var(--primary); font-size:0.8rem;">Built for long-term trust</p>
        <h1 class="fade-up d2">We help companies scale with confidence, clarity, and measurable outcomes.</h1>
        <p class="fade-up d3"><?php echo htmlspecialchars($tagline); ?> We partner with leadership teams to modernize operations, strengthen customer experience, and drive sustained growth through practical execution.</p>
        <div class="hero-actions fade-up d3">
          <a class="cta-btn" href="#contact">Start a Conversation</a>
          <a class="btn-outline" href="#values">See Our Values</a>
        </div>
      </div>

      <aside class="hero-card" aria-label="Key company metrics">
        <h3>What clients value most</h3>
        <div class="metric-grid">
          <div class="metric">
            <strong>98%</strong>
            <span>Client satisfaction score</span>
          </div>
          <div class="metric">
            <strong>12+</strong>
            <span>Years industry expertise</span>
          </div>
          <div class="metric">
            <strong>40%</strong>
            <span>Average process efficiency gain</span>
          </div>
          <div class="metric">
            <strong>24/7</strong>
            <span>Strategic support readiness</span>
          </div>
        </div>
      </aside>
    </section>

    <section class="wrap section" id="values">
      <h2>Company Values That Guide Every Decision</h2>
      <p class="section-intro">Our culture is built on accountability, craftsmanship, and meaningful impact. These principles shape how we design solutions, communicate with stakeholders, and deliver results at scale.</p>
      <div class="values-grid">
        <article class="value-card">
          <h3>Integrity in Action</h3>
          <p>We commit to transparent communication and realistic planning so every partnership begins with trust and stays grounded in truth.</p>
        </article>
        <article class="value-card">
          <h3>Excellence by Design</h3>
          <p>From strategy to implementation, we maintain high standards and build systems that perform reliably in real-world conditions.</p>
        </article>
        <article class="value-card">
          <h3>Customer-Centered Growth</h3>
          <p>We focus on outcomes that matter to customers and teams, ensuring growth is sustainable, measurable, and aligned with purpose.</p>
        </article>
      </div>
    </section>

    <section class="wrap section" id="impact">
      <div class="showcase">
        <div>
          <h2 style="margin-bottom:10px;">Ready to elevate your company presence?</h2>
          <p>Build a credible digital first impression that reflects your maturity, communicates your value, and turns interest into lasting customer relationships.</p>
        </div>
        <a class="cta-btn" href="#contact">Book a Strategy Call</a>
      </div>
    </section>
  </main>

  <footer class="wrap" id="contact">
    <p>&copy; <?php echo $year; ?> <?php echo htmlspecialchars($companyName); ?>. All rights reserved.</p>
  </footer>
</body>
</html>


