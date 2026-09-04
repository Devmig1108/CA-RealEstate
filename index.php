<?php
declare(strict_types=1);

$submitted = ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';

$benefits = [
    'No repairs or cleaning',
    'No agent commissions',
    'Choose your closing date',
];

$steps = [
    ['01', 'Tell us about the property', 'Share the address and a few details. It takes less than two minutes to get started.'],
    ['02', 'Review your cash offer', 'We evaluate the home and present a clear, no-obligation offer for you to consider.'],
    ['03', 'Close on your timeline', 'Accept only if it works for you. Choose a convenient closing date and move forward.'],
];

$situations = [
    ['Inherited property', 'Move forward without taking on months of repairs, cleanout, and upkeep.'],
    ['Major repairs', 'Roof, foundation, HVAC, or cosmetic issues do not have to delay the conversation.'],
    ['Rental headaches', 'Explore an exit when tenants, vacancies, or deferred maintenance become too much.'],
    ['Life changes', 'Relocation, divorce, downsizing, or a new chapter can make timing more important than listings.'],
    ['Behind on payments', 'Understand your options quickly when carrying costs or property taxes are adding up.'],
    ['Vacant home', 'Sell an empty property without continued utilities, insurance, security, or lawn care.'],
];

$reviews = [
    [
        'The process was straightforward from the first conversation. I knew what to expect, never felt pressured, and chose the closing date that worked for my family.',
        'Maria R.',
        'Dallas County',
    ],
    [
        'I had inherited a house that needed more work than I could manage. They explained the numbers clearly and made an overwhelming situation feel manageable.',
        'James T.',
        'Tarrant County',
    ],
    [
        'No showings, no weekend cleanups, and no surprise requests right before closing. The experience was exactly as simple as they described it.',
        'Denise W.',
        'Collin County',
    ],
];

$faqs = [
    ['Do I need to make repairs first?', 'No. The offer is based on the property in its current condition, so you do not need to renovate, clean, stage, or make it market-ready before getting started.'],
    ['How quickly can I receive an offer?', 'After we receive the property details and speak with you, a written offer may be available within 24 hours for qualifying properties.'],
    ['Am I required to accept the offer?', 'Not at all. Reviewing an offer is free and carries no obligation. You decide whether the price, timing, and terms work for you.'],
    ['How fast can closing happen?', "Some transactions may close in as little as seven days, while others use a later date chosen around the seller's schedule and title requirements."],
    ['Will I pay commissions or closing costs?', 'The cash-offer approach is designed without traditional agent commissions. The written offer should clearly explain the closing costs and terms before you decide.'],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C&amp;A Real Estate Demo</title>
    <meta name="description" content="A premium Texas cash home offer experience for homeowners who want a simpler sale.">
    <link rel="canonical" href="https://lone-star-home-offers-demo.ervotech-ep.chatgpt.site/">
    <link rel="icon" href="images/favicon.svg" type="image/svg+xml">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Sell Your Texas House Without the Hassle">
    <meta property="og:description" content="A better cash-offer experience for Texas homeowners starts here.">
    <meta property="og:image" content="images/og.png">
    <meta property="og:site_name" content="C&amp;A Real Estate">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sell Your Texas House Without the Hassle">
    <meta name="twitter:description" content="A better cash-offer experience for Texas homeowners starts here.">
    <meta name="twitter:image" content="images/og.png">

    <link rel="stylesheet" href="styles.css">
    <style>
        :root {
            --ink: #173b66;
            --ink-deep: #0b2340;
            --sage: #dce8f4;
            --muted: #5b6f82;
            --line: rgba(23, 59, 102, 0.14);
        }

        .brand-mark {
            font-size: 11px;
            letter-spacing: 0;
        }

        .nav { color: #435c73; }

        .hero-art {
            background: url('images/hero-home.webp') center / cover no-repeat, #1d4f7e;
        }

        .hero-shade {
            background: linear-gradient(
                90deg,
                rgba(6, 24, 47, 0.98) 0%,
                rgba(8, 34, 63, 0.91) 42%,
                rgba(11, 40, 72, 0.30) 72%,
                rgba(8, 31, 58, 0.40) 100%
            );
        }

        .offer-card input,
        .final-form input,
        .final-form select,
        .final-form textarea {
            border-color: rgba(23, 59, 102, 0.18);
        }

        .comparison-row strong { background: #f0f5fa; }

        .about-visual {
            background: linear-gradient(150deg, #285d8a, var(--ink-deep));
        }

        .form-status {
            background: #e7f0f8;
            color: #173b66;
        }
    </style>
</head>
<body>
<main>
    <div class="announcement">
        <div class="shell announcement-inner">
            <span>Need to sell quickly?</span>
            <a href="tel:+19155550148">Talk with a local home buyer · (915) 555-0148</a>
        </div>
    </div>

    <header class="site-header">
        <div class="shell header-inner">
            <a class="brand" href="#top" aria-label="C&amp;A Real Estate home">
                <span class="brand-mark" aria-hidden="true">C&amp;A</span>
                <span class="brand-copy">
                    <strong>C&amp;A</strong>
                    <small>Real Estate</small>
                </span>
            </a>

            <nav class="nav" aria-label="Primary navigation">
                <a href="#how-it-works">How it works</a>
                <a href="#options">Your options</a>
                <a href="#reviews">Reviews</a>
                <a href="#about">About</a>
            </nav>

            <a class="header-cta" href="#offer">Get my offer</a>
        </div>
    </header>

    <section class="hero" id="top">
        <div class="hero-art" aria-hidden="true"></div>
        <div class="hero-shade" aria-hidden="true"></div>
        <div class="shell hero-grid">
            <div class="hero-copy">
                <p class="eyebrow"><span></span> A simpler way to sell in Texas</p>
                <h1>Sell your house <em>without the hassle.</em></h1>
                <p class="hero-lead">
                    Get a fair cash offer for your home in its current condition. Skip repairs,
                    showings, agent fees, and months of uncertainty.
                </p>

                <div class="benefit-row" aria-label="Key benefits">
                    <?php foreach ($benefits as $benefit): ?>
                        <span><b aria-hidden="true">✓</b><?= htmlspecialchars($benefit) ?></span>
                    <?php endforeach; ?>
                </div>

                <a class="text-link" href="#how-it-works">See how the process works <span>→</span></a>
            </div>

            <aside class="offer-card" aria-label="Request a cash offer">
                <div class="offer-card-heading">
                    <p>Start your offer</p>
                    <h2>Tell us about your home.</h2>
                    <span>No pressure. No obligation. Just your options.</span>
                </div>

                <form action="#offer" method="post">
                    <input type="hidden" name="form_source" value="hero">
                    <label for="hero-address">Property address</label>
                    <input id="hero-address" name="address" type="text" placeholder="123 Main Street" autocomplete="street-address" required>

                    <div class="field-pair">
                        <div>
                            <label for="hero-phone">Phone</label>
                            <input id="hero-phone" name="phone" type="tel" placeholder="(###) ###-####" autocomplete="tel" required>
                        </div>
                        <div>
                            <label for="hero-email">Email</label>
                            <input id="hero-email" name="email" type="email" placeholder="you@email.com" autocomplete="email">
                        </div>
                    </div>

                    <button type="submit">Request my cash offer <span aria-hidden="true">→</span></button>
                    <small>By submitting, you agree that our team may contact you about your property.</small>
                </form>
            </aside>
        </div>
    </section>

    <section class="proof-band" aria-label="Offer highlights">
        <div class="shell proof-grid">
            <div><strong>24 hrs</strong><span>Typical offer response</span></div>
            <div><strong>7 days</strong><span>Fast closing available</span></div>
            <div><strong>$0</strong><span>Agent fees or commissions</span></div>
            <div><strong>100%</strong><span>No-obligation process</span></div>
        </div>
    </section>

    <section class="section process" id="how-it-works">
        <div class="shell">
            <div class="section-heading split-heading">
                <div>
                    <p class="eyebrow dark"><span></span> Clear from start to finish</p>
                    <h2>Three steps. One easier sale.</h2>
                </div>
                <p>
                    Selling your home should not feel like another full-time job. Our process is
                    designed around clarity, flexibility, and your timeline.
                </p>
            </div>

            <div class="step-grid">
                <?php foreach ($steps as [$number, $title, $text]): ?>
                    <article class="step-card">
                        <span class="step-number"><?= htmlspecialchars($number) ?></span>
                        <div class="step-icon" aria-hidden="true"><i></i></div>
                        <h3><?= htmlspecialchars($title) ?></h3>
                        <p><?= htmlspecialchars($text) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section situations-section">
        <div class="shell situations-grid">
            <div class="situations-intro">
                <p class="eyebrow dark"><span></span> Homes are personal. Situations are, too.</p>
                <h2>Whatever brought you here, start with your options.</h2>
                <p>
                    A direct sale is not right for everyone—but when speed, simplicity, or the
                    condition of the property matters most, it can be the right conversation.
                </p>
                <a class="button-link" href="#offer">Talk through my situation <span>→</span></a>
            </div>

            <div class="situation-list">
                <?php foreach ($situations as $index => [$title, $text]): ?>
                    <article class="situation-item">
                        <span><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <div>
                            <h3><?= htmlspecialchars($title) ?></h3>
                            <p><?= htmlspecialchars($text) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section comparison-section" id="options">
        <div class="shell">
            <div class="section-heading centered-heading">
                <p class="eyebrow dark"><span></span> Compare the experience</p>
                <h2>Choose the selling path that fits your priorities.</h2>
                <p>There is no universal best way to sell. The right option depends on whether you value maximum market exposure or maximum convenience.</p>
            </div>

            <div class="comparison-card">
                <div class="comparison-labels" aria-hidden="true">
                    <span>Traditional listing</span>
                    <strong>C&amp;A cash offer</strong>
                </div>
                <div class="comparison-row">
                    <b>Repairs and preparation</b>
                    <span>Cleaning, updates, staging, and photography may be needed</span>
                    <strong>Sell the property as-is</strong>
                </div>
                <div class="comparison-row">
                    <b>Showings</b>
                    <span>Multiple appointments and open-house preparation</span>
                    <strong>One property walkthrough</strong>
                </div>
                <div class="comparison-row">
                    <b>Timing</b>
                    <span>Market time plus buyer financing and appraisal</span>
                    <strong>Fast closing may be available</strong>
                </div>
                <div class="comparison-row">
                    <b>Closing certainty</b>
                    <span>May depend on financing, inspection, and appraisal</span>
                    <strong>Clear cash-offer terms</strong>
                </div>
                <div class="comparison-row">
                    <b>Sale price</b>
                    <span>Potentially higher through full market exposure</span>
                    <strong>Adjusted for repairs, speed, and convenience</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="section reviews-section" id="reviews">
        <div class="shell">
            <div class="reviews-heading">
                <div>
                    <p class="eyebrow"><span></span> Homeowner stories</p>
                    <h2>A smoother sale can change what comes next.</h2>
                </div>
                <div class="rating-block" aria-label="Five star sample rating">
                    <span>★★★★★</span>
                    <strong>Clear answers. Real people.</strong>
                    <small>Representative demo testimonials</small>
                </div>
            </div>

            <div class="review-grid">
                <?php foreach ($reviews as [$quote, $name, $location]): ?>
                    <article class="review-card">
                        <span class="quote-mark" aria-hidden="true">“</span>
                        <blockquote><?= htmlspecialchars($quote) ?></blockquote>
                        <div>
                            <strong><?= htmlspecialchars($name) ?></strong>
                            <small><?= htmlspecialchars($location) ?></small>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section about-section" id="about">
        <div class="shell about-grid">
            <div class="about-visual" aria-hidden="true">
                <div class="texas-card">
                    <span>Local</span>
                    <strong>Texas roots.<br>Straight answers.</strong>
                    <i>Homeowners first</i>
                </div>
            </div>
            <div class="about-copy">
                <p class="eyebrow dark"><span></span> Why C&amp;A</p>
                <h2>Built to feel different from the usual “we buy houses” pitch.</h2>
                <p class="about-lead">
                    Selling a home can be emotional, complicated, and time-sensitive. Our job is to
                    make the direct-sale option understandable—not to pressure you into it.
                </p>
                <div class="principle-grid">
                    <div><strong>01</strong><span>Know what happens next</span></div>
                    <div><strong>02</strong><span>See the terms in writing</span></div>
                    <div><strong>03</strong><span>Choose your own timeline</span></div>
                    <div><strong>04</strong><span>Walk away if it is not right</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section faq-section">
        <div class="shell faq-grid">
            <div class="faq-intro">
                <p class="eyebrow dark"><span></span> Common questions</p>
                <h2>Understand the process before you decide.</h2>
                <p>Still have a question? Call <a href="tel:+19155550148">(915) 555-0148</a> for a no-pressure conversation.</p>
            </div>
            <div class="faq-list">
                <?php foreach ($faqs as $index => [$question, $answer]): ?>
                    <details<?= $index === 0 ? ' open' : '' ?>>
                        <summary><?= htmlspecialchars($question) ?><span aria-hidden="true">+</span></summary>
                        <p><?= htmlspecialchars($answer) ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="offer-section" id="offer">
        <div class="shell final-offer-grid">
            <div class="final-offer-copy">
                <p class="eyebrow"><span></span> Your next step</p>
                <h2>See what a simpler sale could look like.</h2>
                <p>Tell us a little about the property. We will review the details and follow up to discuss the home, your timing, and your options.</p>
                <div class="final-callout">
                    <span>Prefer to talk?</span>
                    <a href="tel:+19155550148">(915) 555-0148</a>
                </div>
            </div>

            <form class="final-form" action="#offer" method="post">
                <input type="hidden" name="form_source" value="full">

                <?php if ($submitted): ?>
                    <p class="form-status" role="status">Demo request received. This package does not email or store the submitted information.</p>
                <?php endif; ?>

                <div class="field-pair">
                    <div>
                        <label for="name">Your name</label>
                        <input id="name" name="name" type="text" autocomplete="name" placeholder="Full name" required>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input id="phone" name="phone" type="tel" autocomplete="tel" placeholder="(###) ###-####" required>
                    </div>
                </div>
                <div>
                    <label for="address">Property address</label>
                    <input id="address" name="address" type="text" autocomplete="street-address" placeholder="Street address, city, ZIP" required>
                </div>
                <div class="field-pair">
                    <div>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email" placeholder="you@email.com">
                    </div>
                    <div>
                        <label for="timeline">Ideal timeline</label>
                        <select id="timeline" name="timeline">
                            <option value="" selected disabled>Select one</option>
                            <option>As soon as possible</option>
                            <option>Within 30 days</option>
                            <option>1–3 months</option>
                            <option>Just exploring</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="notes">Anything we should know?</label>
                    <textarea id="notes" name="notes" rows="3" placeholder="Property condition, repairs, occupants, or questions"></textarea>
                </div>
                <button type="submit">Request my no-obligation offer <span aria-hidden="true">→</span></button>
                <small>This demo form does not email or store information. Final delivery and contact language can be connected before launch.</small>
            </form>
        </div>
    </section>

    <footer>
        <div class="shell footer-top">
            <a class="brand footer-brand" href="#top" aria-label="C&amp;A Real Estate home">
                <span class="brand-mark" aria-hidden="true">C&amp;A</span>
                <span class="brand-copy"><strong>C&amp;A</strong><small>Real Estate</small></span>
            </a>
            <p>A clearer, more human way to explore a direct home sale in Texas.</p>
            <div class="footer-contact">
                <a href="tel:+19155550148">(915) 555-0148</a>
                <span>hello@carealestate.com</span>
            </div>
        </div>
        <div class="shell footer-bottom">
            <span>© 2026 C&amp;A Real Estate. Demo concept.</span>
            <div>
                <a href="#how-it-works">How it works</a>
                <a href="#options">Your options</a>
                <a href="#offer">Get an offer</a>
            </div>
        </div>
    </footer>
</main>
</body>
</html>
