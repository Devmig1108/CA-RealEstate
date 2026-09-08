<?php
declare(strict_types=1);

$submitted = ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';

$benefits = ['Sell as-is', 'No agent commissions', 'Choose your closing date'];

$steps = [
    ['1', 'Tell us about the house', 'Share the address and a few details about the property. It only takes a minute to start.'],
    ['2', 'Review your offer', 'We look at the home and explain a straightforward, no-obligation cash offer.'],
    ['3', 'Pick what works for you', 'Accept only if it feels right. If it does, choose a closing date that fits your plans.'],
];

$situations = [
    ['A house that needs repairs', 'Skip the cleanup, updates, and contractor estimates. We consider homes in their current condition.'],
    ['An inherited or vacant home', 'Move forward without taking on months of maintenance, utilities, or property upkeep.'],
    ['A rental that became a headache', 'Explore a simpler exit when tenants, vacancies, or deferred maintenance are adding stress.'],
    ['A life change or tight timeline', 'Relocation, downsizing, divorce, or financial pressure can make a predictable sale more valuable.'],
];

$serviceAreas = ['El Paso', 'Horizon City', 'Socorro', 'Canutillo', 'Anthony', 'San Elizario'];

$faqs = [
    ['Do you buy houses anywhere in El Paso?', 'We work with homeowners throughout El Paso and nearby communities, including Horizon City, Socorro, Canutillo, Anthony, and San Elizario.'],
    ['Do I need to make repairs first?', 'No. You can tell us about the home exactly as it is. There is no need to renovate, clean, stage, or make it market-ready before starting the conversation.'],
    ['How does the cash-offer process work?', 'You share the property details, we review the home, and you receive an offer to consider. There is no obligation to accept it.'],
    ['How quickly can I sell?', 'Timing depends on the property and title work, but a fast closing may be available. You can also choose a later date if you need more time.'],
    ['Will I pay agent commissions?', 'A direct cash sale does not use the traditional listing process or agent commissions. Your written offer should clearly explain the terms and any closing costs before you decide.'],
];

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'C&A Investments',
    'telephone' => '+1-915-363-5711',
    'description' => 'A local El Paso home-buying company helping homeowners explore simple, as-is cash offers.',
    'areaServed' => array_map(static fn (string $name): array => ['@type' => 'City', 'name' => $name], $serviceAreas),
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>We Buy Houses in El Paso, TX | C&amp;A Investments</title>
    <meta name="description" content="Sell your El Paso house as-is with C&amp;A Investments. Explore a simple, no-obligation cash offer without repairs, showings, or agent commissions.">
    <link rel="canonical" href="https://lone-star-home-offers-demo.ervotech-ep.chatgpt.site/">
    <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sell Your El Paso House Without the Hassle">
    <meta property="og:description" content="A simple, local cash-offer experience for El Paso homeowners.">
    <meta property="og:image" content="images/og.png">
    <meta property="og:site_name" content="C&amp;A Investments">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sell Your El Paso House Without the Hassle">
    <meta name="twitter:description" content="A simple, local cash-offer experience for El Paso homeowners.">
    <meta name="twitter:image" content="images/og.png">
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<main>
    <div class="announcement">
        <div class="shell announcement-inner"><span>Local help for El Paso homeowners</span><a href="tel:+19153635711">Call or text (915) 363-5711</a></div>
    </div>

    <header class="site-header">
        <div class="shell header-inner">
            <a class="brand" href="#top" aria-label="C&amp;A Investments home"><span class="brand-mark" aria-hidden="true">C&amp;A</span><span class="brand-copy"><strong>C&amp;A Investments</strong><small>El Paso home buyers</small></span></a>
            <nav class="nav" aria-label="Primary navigation"><a href="#how-it-works">How it works</a><a href="#why-ca">Why C&amp;A</a><a href="#el-paso">Our area</a><a href="#questions">Questions</a></nav>
            <a class="header-cta" href="#offer">Get my offer</a>
        </div>
    </header>

    <section class="hero" id="top">
        <div class="hero-art" aria-hidden="true"></div><div class="hero-shade" aria-hidden="true"></div>
        <div class="shell hero-grid">
            <div class="hero-copy">
                <p class="local-pill"><span aria-hidden="true">●</span> Proudly serving El Paso, Texas</p>
                <h1>Want to sell your house? <em>We make it easy.</em></h1>
                <p class="hero-lead">C&amp;A Investments buys El Paso houses as-is. No repairs, no showings, and no long waiting game—just a simple offer and a timeline that works for you.</p>
                <div class="benefit-row" aria-label="Key benefits"><?php foreach ($benefits as $benefit): ?><span><b aria-hidden="true">✓</b><?= htmlspecialchars($benefit) ?></span><?php endforeach; ?></div>
                <div class="hero-actions"><a class="primary-button" href="#offer">Get a cash offer <span aria-hidden="true">→</span></a><a class="phone-link" href="tel:+19153635711"><small>Prefer to talk?</small><strong>(915) 363-5711</strong></a></div>
            </div>

            <aside class="offer-card" aria-label="Start a cash offer request">
                <div class="friendly-note"><span aria-hidden="true">☺</span><p><strong>Start with the address.</strong> We’ll take it from there.</p></div>
                <form action="#offer" method="post">
                    <input type="hidden" name="form_source" value="hero">
                    <label for="hero-address">Property address</label><input id="hero-address" name="address" type="text" placeholder="Street address, El Paso, TX" autocomplete="street-address" required>
                    <label for="hero-phone">Best phone number</label><input id="hero-phone" name="phone" type="tel" placeholder="(915) 000-0000" autocomplete="tel" required>
                    <button type="submit">Tell me what my house could sell for <span aria-hidden="true">→</span></button>
                    <small>No pressure and no obligation. We’ll simply talk through the property and your options.</small>
                </form>
            </aside>
        </div>
    </section>

    <section class="comfort-strip" aria-label="What homeowners can expect">
        <div class="shell comfort-grid"><div><span aria-hidden="true">01</span><strong>No cleanup needed</strong><small>Leave unwanted items behind</small></div><div><span aria-hidden="true">02</span><strong>No open houses</strong><small>Skip repeated showings</small></div><div><span aria-hidden="true">03</span><strong>No pressure</strong><small>You decide if the offer works</small></div></div>
    </section>

    <section class="section process" id="how-it-works">
        <div class="shell">
            <div class="section-heading simple-heading"><p class="eyebrow">How it works</p><h2>A home sale in three simple steps.</h2><p>You do not need to know everything about the house before calling. Start with what you know, and we’ll guide the conversation from there.</p></div>
            <div class="step-grid"><?php foreach ($steps as [$number, $title, $text]): ?><article class="step-card"><span class="step-number"><?= htmlspecialchars($number) ?></span><h3><?= htmlspecialchars($title) ?></h3><p><?= htmlspecialchars($text) ?></p></article><?php endforeach; ?></div>
        </div>
    </section>

    <section class="section situations-section" id="why-ca">
        <div class="shell situations-grid">
            <div class="situations-intro"><p class="eyebrow">A practical option</p><h2>Your house does not have to be “market ready.”</h2><p>Some homes—and some seasons of life—do not fit the traditional listing process. C&amp;A offers El Paso homeowners a direct, easier path to consider.</p><a class="text-link" href="#offer">Tell us about the house <span aria-hidden="true">→</span></a></div>
            <div class="situation-list"><?php foreach ($situations as [$title, $text]): ?><article class="situation-item"><span aria-hidden="true">✓</span><div><h3><?= htmlspecialchars($title) ?></h3><p><?= htmlspecialchars($text) ?></p></div></article><?php endforeach; ?></div>
        </div>
    </section>

    <section class="section local-section" id="el-paso">
        <div class="shell local-grid">
            <div class="map-card"><iframe title="Map showing El Paso, Texas and nearby communities" src="https://www.openstreetmap.org/export/embed.html?bbox=-106.729%2C31.608%2C-106.183%2C32.002&amp;layer=mapnik&amp;marker=31.7619%2C-106.4850" loading="lazy"></iframe><div class="map-label"><span aria-hidden="true">●</span> El Paso, Texas</div></div>
            <div class="local-copy"><p class="eyebrow">Local means something</p><h2>El Paso is home. We treat homeowners like neighbors.</h2><p>C&amp;A Investments is focused right here in the Borderland. That local knowledge helps us understand El Paso homes, neighborhoods, and the real-life timing behind a sale.</p><div class="service-areas" aria-label="Communities served"><?php foreach ($serviceAreas as $area): ?><span><?= htmlspecialchars($area) ?></span><?php endforeach; ?></div><div class="local-callout"><strong>Have a property nearby?</strong><p>Call or text <a href="tel:+19153635711">(915) 363-5711</a>. If we can help, we’ll explain how. If we cannot, we’ll be straightforward about that too.</p></div></div>
        </div>
    </section>

    <section class="section choice-section">
        <div class="shell choice-grid">
            <div><p class="eyebrow">A clear choice</p><h2>Is a direct sale right for you?</h2><p>A traditional listing may bring a higher sale price. A direct cash offer is built around convenience, condition, and a more predictable timeline.</p></div>
            <div class="choice-card"><strong>A C&amp;A offer may make sense when you want to:</strong><ul><li>Sell the house in its current condition</li><li>Avoid repairs, staging, and repeated showings</li><li>Know the terms before committing</li><li>Choose a closing date around your plans</li></ul><a href="#offer">Explore your offer—there’s no obligation <span aria-hidden="true">→</span></a></div>
        </div>
    </section>

    <section class="section faq-section" id="questions">
        <div class="shell faq-grid">
            <div class="faq-intro"><p class="eyebrow">Common questions</p><h2>Get clear answers before you decide.</h2><p>Still wondering about something? Call or text <a href="tel:+19153635711">(915) 363-5711</a> for a friendly, no-pressure conversation.</p></div>
            <div class="faq-list"><?php foreach ($faqs as $index => [$question, $answer]): ?><details<?= $index === 0 ? ' open' : '' ?>><summary><?= htmlspecialchars($question) ?><span aria-hidden="true">+</span></summary><p><?= htmlspecialchars($answer) ?></p></details><?php endforeach; ?></div>
        </div>
    </section>

    <section class="offer-section" id="offer">
        <div class="shell final-offer-grid">
            <div class="final-offer-copy"><p class="eyebrow">Ready when you are</p><h2>Tell us about your El Paso house.</h2><p>Share a few details and we’ll follow up to learn about the property, your timing, and what a simple sale could look like.</p><div class="final-callout"><span>Call or text us directly</span><a href="tel:+19153635711">(915) 363-5711</a></div></div>
            <form class="final-form" action="#offer" method="post">
                <input type="hidden" name="form_source" value="full">
                <?php if ($submitted): ?><p class="form-status" role="status">Demo request received. This package does not email or store the submitted information.</p><?php endif; ?>
                <div class="field-pair"><div><label for="name">Your name</label><input id="name" name="name" type="text" autocomplete="name" placeholder="Full name" required></div><div><label for="phone">Phone</label><input id="phone" name="phone" type="tel" autocomplete="tel" placeholder="(915) 000-0000" required></div></div>
                <div><label for="address">Property address</label><input id="address" name="address" type="text" autocomplete="street-address" placeholder="Street address, city, ZIP" required></div>
                <div class="field-pair"><div><label for="email">Email</label><input id="email" name="email" type="email" autocomplete="email" placeholder="you@email.com"></div><div><label for="timeline">When would you like to sell?</label><select id="timeline" name="timeline"><option value="" selected disabled>Select one</option><option>As soon as possible</option><option>Within 30 days</option><option>1–3 months</option><option>Just exploring</option></select></div></div>
                <div><label for="notes">Anything we should know?</label><textarea id="notes" name="notes" rows="3" placeholder="Property condition, repairs, occupants, or questions"></textarea></div>
                <button type="submit">Request my no-obligation offer <span aria-hidden="true">→</span></button>
                <small>This demo form does not email or store information. Final delivery and contact language can be connected before launch.</small>
            </form>
        </div>
    </section>

    <footer>
        <div class="shell footer-top"><a class="brand footer-brand" href="#top" aria-label="C&amp;A Investments home"><span class="brand-mark" aria-hidden="true">C&amp;A</span><span class="brand-copy"><strong>C&amp;A Investments</strong><small>El Paso home buyers</small></span></a><p>A local, straightforward way to explore selling your El Paso house as-is.</p><div class="footer-contact"><a href="tel:+19153635711">(915) 363-5711</a><span>hello@cainvestments.com</span></div></div>
        <div class="shell footer-bottom"><span>© 2026 C&amp;A Investments. Demo concept.</span><div><a href="#how-it-works">How it works</a><a href="#el-paso">Our area</a><a href="#offer">Get an offer</a></div></div>
    </footer>
</main>
</body>
</html>
