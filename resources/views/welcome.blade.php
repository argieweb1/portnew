<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>Portfolio</title>
		<link rel="preconnect" href="https://fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
		<style>
			/* Basic reset */
			:root{--bg:#f8fafc;--card:#ffffff;--muted:#6b7280;--brand:#2563eb;--dark:#0f172a}
			*{box-sizing:border-box;margin:0;padding:0}
			html,body{height:100%}
			body{font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;line-height:1.5;color:var(--dark);background:var(--bg);}
			.container{max-width:1100px;margin:0 auto;padding:0 20px}



			/* Header / Nav */
			header{position:sticky;top:0;background:rgba(255,255,255,.8);backdrop-filter:blur(6px);border-bottom:1px solid rgba(15,23,42,.04);z-index:60}
			.nav{display:flex;align-items:center;justify-content:space-between;height:64px}
			.logo{font-weight:700;color:var(--brand);font-size:1.125rem}
			nav ul{display:flex;gap:1rem;list-style:none}
			nav a{color:var(--dark);text-decoration:none;font-weight:600;padding:.5rem .6rem;border-radius:8px}
			nav a:hover{background:rgba(37,99,235,.06);color:var(--brand)}
			.mobile-toggle{display:none;background:transparent;border:0;font-size:1.25rem}

			/* Hero */
			.hero{min-height:78vh;display:grid;align-items:center}
			.hero-grid{display:grid;grid-template-columns:1fr 420px;gap:2.5rem;align-items:center}
			.eyebrow{display:inline-block;font-size:.85rem;color:var(--muted);margin-bottom:.5rem}
			h1{font-size:2.6rem;line-height:1.05;margin-bottom:.6rem}
			p.lead{color:var(--muted);margin-bottom:1rem;max-width:56ch}
			.cta{display:flex;gap:.75rem}
			.btn{padding:.6rem 1rem;border-radius:999px;font-weight:700;text-decoration:none;display:inline-block}
			.btn-primary{background:var(--brand);color:#fff}
			.btn-ghost{border:2px solid rgba(15,23,42,.06);background:transparent;color:var(--dark)}

			.visual{width:100%;height:320px;border-radius:14px;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);display:grid;place-items:center;color:#fff;font-weight:800;font-size:2.25rem}

			/* Sections */
			section{padding:4rem 0}
			.section-title{text-align:center;font-size:1.75rem;color:var(--brand);margin-bottom:1rem}
			.about-grid{display:grid;grid-template-columns:1fr 320px;gap:2rem;align-items:center}
			.chips{display:flex;flex-wrap:wrap;gap:.5rem}
			.chip{background:var(--card);border:1px solid #eef2ff;padding:.35rem .6rem;border-radius:999px;font-weight:600;font-size:.85rem}

			.skills-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem}
			.skill{background:var(--card);padding:1rem;border-radius:12px;box-shadow:0 6px 18px rgba(2,6,23,.06);text-align:center}

			.projects-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem}
			.project{background:var(--card);border-radius:12px;overflow:hidden;display:flex;flex-direction:column}
			.project .img{height:160px;background:linear-gradient(135deg,#06b6d4,#7c3aed);display:grid;place-items:center;color:#fff;font-weight:800}
			.project .meta{padding:1rem}

			.contact-center{max-width:760px;margin:0 auto}
			.form-row{display:grid;grid-template-columns:1fr 1fr;gap:.5rem}
			input,textarea{width:100%;padding:.75rem;border:1px solid #e6eef9;border-radius:8px}

			footer{padding:2rem 0;text-align:center;color:var(--muted);font-size:.95rem}

			/* Reveal animations */
			.reveal{opacity:0;transform:translateY(12px);will-change:opacity,transform}
			.reveal.visible{opacity:1;transform:none;transition:opacity .6s ease,transform .6s cubic-bezier(.2,.9,.2,1)}

			/* Hover lifts and responsive overrides */
			.hover-lift{transition:transform .22s ease,box-shadow .22s ease}
			.hover-lift:hover{transform:translateY(-6px);box-shadow:0 12px 30px rgba(2,6,23,.08)}

			@media (max-width:900px){.hero-grid{grid-template-columns:1fr 340px}}
			@media (max-width:768px){
				nav ul{display:none}
				.mobile-toggle{display:block}
				.hero-grid{grid-template-columns:1fr}
				.about-grid{grid-template-columns:1fr}
				.skills-grid{grid-template-columns:1fr}
				.projects-grid{grid-template-columns:1fr}
				.form-row{grid-template-columns:1fr}
			}

			@media (prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none}.reveal.visible{transition:none}}
		</style>
	</head>
	<body>
		<header>
			<div class="container nav">
				<div class="logo">Portfolio</div>
				<nav aria-label="Primary navigation">
					<ul>
						<li><a href="#about">About</a></li>
						<li><a href="#skills">Skills</a></li>
						<li><a href="#projects">Projects</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
				<button class="mobile-toggle" aria-expanded="false" aria-controls="mobileMenu" id="menuToggle">☰</button>
			</div>
			<!-- Mobile menu -->
			<div id="mobileMenu" style="display:none;background:#fff;border-top:1px solid rgba(15,23,42,.04);padding:1rem">
				<div class="container">
					<nav aria-label="Mobile navigation">
						<ul style="display:flex;flex-direction:column;gap:.5rem;list-style:none">
							<li><a href="#about">About</a></li>
							<li><a href="#skills">Skills</a></li>
							<li><a href="#projects">Projects</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<main id="main">
			<section class="hero">
				<div class="container hero-grid">
					<div>
						<div class="eyebrow">Hello — I build web apps</div>
						<h1>Design-forward Laravel & JavaScript</h1>
						<p class="lead">I build production-ready applications focusing on performance, accessibility and delightful UX. I care about readable code, fast APIs and maintainable systems.</p>
						<div class="cta">
							<a class="btn btn-primary" href="#projects">View projects</a>
							<a class="btn btn-ghost" href="#contact">Get in touch</a>
						</div>
					</div>
					<div class="visual hover-lift" aria-hidden="true">SVG</div>
				</div>
			</section>

			<section id="about" class="reveal">
				<div class="container about-grid">
					<div>
						<h2 class="section-title">About</h2>
						<p>I’m a full-stack developer who ships maintainable applications using Laravel, modern JS and accessible design. My work spans small teams to enterprise systems.</p>
						<div class="chips" style="margin-top:1rem">
							<span class="chip">Laravel</span>
							<span class="chip">PHP</span>
							<span class="chip">Vue</span>
							<span class="chip">React</span>
							<span class="chip">Tailwind</span>
						</div>
					</div>
					<div class="visual" aria-hidden="true">👋</div>
				</div>
			</section>

			<section id="skills" class="reveal">
				<div class="container">
					<h3 class="section-title">Skills</h3>
					<div class="skills-grid">
						<div class="skill hover-lift">
							<div style="font-size:1.5rem">🧠</div>
							<h4>Backend</h4>
							<p class="muted">Laravel, Eloquent, Queues, Services</p>
						</div>
						<div class="skill hover-lift">
							<div style="font-size:1.5rem">🎨</div>
							<h4>Frontend</h4>
							<p class="muted">Vue, React, Blade templates, A11y</p>
						</div>
						<div class="skill hover-lift">
							<div style="font-size:1.5rem">⚙️</div>
							<h4>DevOps</h4>
							<p class="muted">Docker, CI, Observability</p>
						</div>
					</div>
				</div>
			</section>

			<section id="projects" class="reveal">
				<div class="container">
					<h3 class="section-title">Projects</h3>
					<div class="projects-grid">
						<article class="project hover-lift">
							<div class="img">Portfolio CMS</div>
							<div class="meta">
								<h4>Portfolio CMS</h4>
								<p class="muted">A small CMS built with Laravel and Tailwind for content-driven sites.</p>
							</div>
						</article>
						<article class="project hover-lift">
							<div class="img">Realtime Chat</div>
							<div class="meta">
								<h4>Realtime Chat</h4>
								<p class="muted">Websockets, channels and presence for team communication.</p>
							</div>
						</article>
						<article class="project hover-lift">
							<div class="img">Analytics Dash</div>
							<div class="meta">
								<h4>Analytics Dashboard</h4>
								<p class="muted">Multi-tenant metrics and reporting, optimized for large datasets.</p>
							</div>
						</article>
					</div>
				</div>
			</section>

			<section id="contact" class="reveal">
				<div class="container contact-center">
					<h3 class="section-title">Contact</h3>
					<form onsubmit="event.preventDefault();alert('Thanks — message sent (demo)');">
						<div class="form-row">
							<input type="text" name="name" placeholder="Your name" required />
							<input type="email" name="email" placeholder="Email address" required />
						</div>
						<textarea name="message" placeholder="Tell me about your project" required style="margin-top:.75rem;border-radius:8px"></textarea>
						<div style="margin-top:1rem"><button class="btn btn-primary" type="submit">Send message</button></div>
					</form>
				</div>
			</section>
		</main>

		<footer>
			<div class="container">© <span id="yr"></span> — Built with care.</div>
		</footer>

		<script>
			// Mobile menu toggle
			(function(){
				const toggle = document.getElementById('menuToggle');
				const menu = document.getElementById('mobileMenu');
				toggle && toggle.addEventListener('click', ()=>{
					const vis = menu.style.display === 'block';
					menu.style.display = vis ? 'none' : 'block';
					toggle.setAttribute('aria-expanded', String(!vis));
				});

				// Reveal on scroll
				const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
				if (!reduce && 'IntersectionObserver' in window) {
					const io = new IntersectionObserver((entries)=>{
						entries.forEach(e=>{
							if(e.isIntersecting){ e.target.classList.add('visible'); io.unobserve(e.target); }
						})
					},{rootMargin:'0px 0px -8% 0px',threshold:0.08});
					document.querySelectorAll('.reveal').forEach(el=>io.observe(el));
				} else {
					document.querySelectorAll('.reveal').forEach(el=>el.classList.add('visible'));
				}

				// Year
				const yr = document.getElementById('yr'); if(yr) yr.textContent = new Date().getFullYear();
			})();
		</script>
	</body>
</html>
