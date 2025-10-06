<?php include('master/header.php') ?>

<div class="vasp-section">
  <div class="vasp-container">

    <h2 class="section-title">Why Vasp Technologies?</h2>
    <p class="section-intro">
      We transform ideas into impactful digital solutions, helping businesses grow smarter in Guwahati, Assam, and across Northeast India.
      Amidst the thriving IT talent in Northeast India, the team at <strong>Vasp Technologies</strong> brings expertise across web development, ERP, and digital innovation.
      With creativity and technical excellence, we collaborate with our clients to go beyond limits and deliver solutions that redefine business success.
    </p>

    <div class="vasp-grid">
      <div class="vasp-card">
        <img src="#" alt="Innovation">
        <div class="vasp-card-content">
          <h3>The Vasp Promise</h3>
          <p>Our passion lies in building solutions that serve people first. Whether it’s a school ERP software in Guwahati, an e-commerce portal, or a mobile app, everything we create is designed to make life easier, faster, and more connected.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Innovation">
        <div class="vasp-card-content">
          <h3>Our Passion for Innovation</h3>
          <p>At Vasp Technologies, our passion for innovation and commitment to people drive us to build solutions that don’t just function—they add value to everyday life. From ERP software to custom mobile app development, every product is designed with a purpose: to simplify, connect, and empower.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Learning">
        <div class="vasp-card-content">
          <h3>Keep Challenging, Keep Learning</h3>
          <p>Learning never stops here. Our developers and designers have expertise across every language, framework, and platform. Whether it’s web development, ERP software, or e-commerce, we have the skills—and we deliver.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Value">
        <div class="vasp-card-content">
          <h3>Get Value, Not Just a Product</h3>
          <p>We don’t just create apps or websites; we craft long-term digital solutions designed for real-world impact and success in the competitive market.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Understanding">
        <div class="vasp-card-content">
          <h3>We Know What You’re Looking For</h3>
          <p>With years of experience working with schools, enterprises, and startups, we understand what businesses in Assam need—delivering beyond expectations every time.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Collaboration">
        <div class="vasp-card-content">
          <h3>Collaborate, Coordinate, and Grow</h3>
          <p>We believe in partnership—regular feedback, ongoing discussions, and continuous refinement. From web design to app development, your vision drives the process.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Compassion">
        <div class="vasp-card-content">
          <h3>Care and Compassion</h3>
          <p>We don’t just build software; we care about how it impacts your customers. From school ERP solutions to e-commerce websites, we always think one step ahead.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Global">
        <div class="vasp-card-content">
          <h3>No Borders, Only Solutions</h3>
          <p>Though proudly rooted in Guwahati, our services extend beyond borders—ensuring global collaboration and quality support anywhere in the world.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Guidance">
        <div class="vasp-card-content">
          <h3>Honest Opinions, Clear Guidance</h3>
          <p>As your technology partner, we guide you with honest insights that serve your growth—whether it’s ERP vs. traditional systems or choosing the right platform.</p>
        </div>
      </div>

      <div class="vasp-card">
        <img src="#" alt="Ownership">
        <div class="vasp-card-content">
          <h3>Your Software, Your Property</h3>
          <p>Every line of code we write is your intellectual property. We bring the expertise, but the ownership is 100% yours—because we respect and protect your vision.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.vasp-section {
  background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%);
  padding: 80px 20px;
  font-family: "Poppins", sans-serif;
  color: #222;
  max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
}

.section-title {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 400;
  color: #1b3c6e;
  margin-bottom: 15px;
  position: relative;
}

.section-title::after {
  content: "";
  width: 80px;
  height: 4px;
  background: linear-gradient(to right, #007bff, #ff7b00);
  display: block;
  margin: 12px auto 0;
  border-radius: 2px;
}

.section-intro {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 60px;
  font-size: 1.05rem;
  line-height: 1.7;
  color: #444;
}

.vasp-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}

.vasp-card {
  background: #fff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  border-top: 5px solid transparent;
}

.vasp-card:hover {
  transform: translateY(-8px);
  border-top: 5px solid #1b3c6e;
  box-shadow: 0 10px 25px rgba(0, 123, 255, 0.2);
}

.vasp-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.vasp-card:hover img {
  transform: scale(1.05);
}

.vasp-card-content {
  padding: 20px;
}

.vasp-card h3 {
  font-size: 1.25rem;
  color: #1b3c6e;
  margin-bottom: 10px;
  position: relative;
}

.vasp-card h3::after {
  content: "";
  width: 40px;
  height: 3px;
  background: #ff7b00;
  display: block;
  margin-top: 8px;
  border-radius: 2px;
}

.vasp-card p {
  font-size: 0.95rem;
  color: #555;
  line-height: 1.6;
  margin-top: 8px;
}
.vasp-card:last-child {
  grid-column: 1 / -1;
  max-width: 400px;
  justify-self: center;
}

@media (max-width: 768px) {
  .section-title {
    font-size: 2rem;
  }
  .section-intro {
    font-size: 0.98rem;
  }
  .vasp-card img {
    height: 180px;
  }
}
</style>





<?php include('master/footer.php') ?>

