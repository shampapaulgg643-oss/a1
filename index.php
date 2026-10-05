<?php
// Voile Kingdom — homepage
$newsletterMsg = '';
$newsletterOk  = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter_email'])) {
    $email = trim(filter_input(INPUT_POST, 'newsletter_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['website'])) {
        $newsletterMsg = 'Thank you.'; // honeypot filled: ignore quietly
        $newsletterOk = true;
    } elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $line = date('c') . "\t" . $email . PHP_EOL;
        @file_put_contents(__DIR__ . '/newsletter-signups.txt', $line, FILE_APPEND | LOCK_EX);
        $newsletterMsg = 'Thank you for joining the Voile Kingdom letter. Look out for our next note.';
        $newsletterOk = true;
    } else {
        $newsletterMsg = 'That email address doesn’t look quite right. Please check it and try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Voile Kingdom | Flowing Linen, Silk &amp; Cotton Voile Clothing</title>
<meta name="description" content="Voile Kingdom designs light, flowing dresses, resortwear and separates in linen, silk and cotton voile. Explore our collections, fabric guide and styling notes.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.voilekingdom.com/">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Voile Kingdom">
<meta property="og:title" content="Voile Kingdom | Flowing Linen, Silk &amp; Cotton Voile Clothing">
<meta property="og:description" content="Voile Kingdom designs light, flowing dresses, resortwear and separates in linen, silk and cotton voile. Explore our collections, fabric guide and styling notes.">
<meta property="og:url" content="https://www.voilekingdom.com/">
<meta property="og:image" content="https://images.unsplash.com/photo-1785354745594-c205b95004e2?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#3E6B68">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='32' fill='%233E6B68'/%3E%3Ctext x='32' y='43' font-family='Georgia,serif' font-size='30' text-anchor='middle' fill='%23F3ECE1'%3EVK%3C/text%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;1,500&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "ClothingStore", "name": "Voile Kingdom", "url": "https://www.voilekingdom.com/", "telephone": "+1-888-777-5845", "email": "info@voilekingdom.com", "image": "https://images.unsplash.com/photo-1785354745594-c205b95004e2?auto=format&fit=crop&w=1200&q=75", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "How do your dresses usually fit?", "acceptedAnswer": {"@type": "Answer", "text": "Most of our dresses are cut with ease through the body, so they skim rather than cling. If you like a closer fit through the shoulders, or you sit between sizes, the smaller size is usually the better choice. Each piece in the Fabric & Size Guide lists garment measurements, so you can compare against something you already own and love."}}, {"@type": "Question", "name": "Will linen crease?", "acceptedAnswer": {"@type": "Answer", "text": "Yes, and that is part of its character. Linen creases softly and relaxes as you wear it, and the fibre gets smoother with every wash. If you prefer a crisper look, a quick steam on the reverse side while the garment is still slightly damp works far better than a hot, dry iron."}}, {"@type": "Question", "name": "What is cotton voile, exactly?", "acceptedAnswer": {"@type": "Answer", "text": "Voile is a lightweight, semi-sheer plain weave made from tightly twisted yarns. It feels cool and a little crisp against the skin, holds gathers beautifully and dries quickly. It is the fabric our name comes from, and it shows up in many of our summer blouses and tiered dresses."}}, {"@type": "Question", "name": "How long does delivery take?", "acceptedAnswer": {"@type": "Answer", "text": "Orders within the continental United States usually arrive in 3 to 6 business days with standard shipping. Express options are shown at checkout. Full details, including international shipping, are on our Shipping Policy page."}}, {"@type": "Question", "name": "Can I return something that doesn't work for me?", "acceptedAnswer": {"@type": "Answer", "text": "Unworn, unwashed pieces with their tags attached can be returned within 30 days of delivery. We will refund the original payment method once the item has been received and checked. Our Returns & Refunds page explains the steps and the few exceptions."}}, {"@type": "Question", "name": "Do you restock sold-out pieces?", "acceptedAnswer": {"@type": "Answer", "text": "Sometimes. We produce in small runs, and a few core shapes come back each season in new fabrics. If there is a piece you missed, write to us through the contact page and we will let you know honestly whether it is likely to return."}}]}</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="site-header">
  <div class="notice">Free standard shipping on US orders over $150 &middot; 30-day returns on unworn pieces</div>
  <nav class="nav-row" aria-label="Main navigation">
    <ul class="nav-side"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="collections.html">Collections</a></li><li><a href="fabric-guide.html">Fabric Guide</a></li></ul>
    <a class="logo" href="index.php" aria-label="Voile Kingdom home">Voile Kingdom<span>Clothes that move</span></a>
    <ul class="nav-side right"><li><a href="about.html">Our Story</a></li><li><a href="contact.html">Contact</a></li></ul>
    <button class="menu-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu"><span></span><span></span><span></span></button>
  </nav>
  <div class="mobile-menu" id="mobile-menu">
    <button class="close" aria-label="Close menu">&times;</button>
    <a href="index.php">Home</a><a href="collections.html">Collections</a><a href="fabric-guide.html">Fabric Guide</a><a href="about.html">Our Story</a><a href="contact.html">Contact</a>
  </div>
</header>

<main id="main">

<!-- 1. Hero -->
<section class="hero">
  <div class="wrap hero-grid">
    <div class="hero-copy">
      <span class="eyebrow">Summer &amp; Resort Edit</span>
      <h1>Clothes that <span class="italic">catch the breeze</span></h1>
      <p>Voile Kingdom makes light, flowing clothing in linen, silk and cotton voile: dresses, easy separates and accessories you reach for again and again because they feel good the moment you put them on.</p>
      <div class="actions">
        <a class="btn btn--sea" href="collections.html">Explore the collections</a>
        <a class="link-line" href="fabric-guide.html">Find your fabric</a>
      </div>
    </div>
    <div class="arches">
      <figure><img src="https://images.unsplash.com/photo-1539008835657-9e8e9680c956?auto=format&fit=crop&w=500&q=75" alt="woman in a flowing dress walking along the seashore" width="500" height="833" fetchpriority="high"></figure>
      <figure><img src="https://images.unsplash.com/photo-1785354745594-c205b95004e2?auto=format&fit=crop&w=500&q=75" alt="woman spinning in a flowing beige dress" width="500" height="966" fetchpriority="high"></figure>
      <figure><img src="https://images.unsplash.com/photo-1747396206869-75ea57b325ce?auto=format&fit=crop&w=500&q=75" alt="woman posing in a simple natural linen dress" width="500" height="833"></figure>
    </div>
  </div>
</section>

<!-- 2. Statement -->
<section class="statement">
  <div class="wrap">
    <div class="swatch"><img src="https://images.unsplash.com/photo-1528458909336-e7a0adfed0a5?auto=format&fit=crop&w=300&q=75" alt="close-up of beige linen fabric texture" width="120" height="120" loading="lazy"></div>
    <span class="eyebrow">Why we exist</span>
    <p class="lead">We started with a simple frustration: summer clothes that looked lovely on the hanger and felt hot, stiff or fragile by lunchtime. So we began with the fabric first, and let the shape follow the way it wants to fall.</p>
    <p class="sign">&mdash; The Voile Kingdom studio, New York</p>
  </div>
</section>

<!-- 3. Collections -->
<section class="collections" aria-labelledby="coll-title">
  <div class="wrap">
    <div class="sec-head">
      <div><span class="eyebrow">Shop by category</span><h2 id="coll-title">Four ways to dress lightly</h2></div>
      <p>Each collection is built around pieces that layer together, so a single suitcase can carry a whole week of outfits.</p>
    </div>
    <div class="arch-tiles">
      <a class="arch-tile" href="collections.html#dresses"><div class="img"><img src="https://images.unsplash.com/photo-1566942974683-0a1aa5d212f1?auto=format&fit=crop&w=600&q=75" alt="woman in a white long-sleeved flowing dress" width="600" height="860" loading="lazy"></div><h3>Dresses</h3><p>Midis, maxis and easy day dresses</p></a>
      <a class="arch-tile" href="collections.html#resortwear"><div class="img"><img src="https://images.unsplash.com/photo-1784854492317-350fe4abd757?auto=format&fit=crop&w=600&q=75" alt="smiling woman in a brown kaftan with floral embroidery" width="600" height="860" loading="lazy"></div><h3>Resortwear</h3><p>Kaftans, cover-ups and holiday sets</p></a>
      <a class="arch-tile" href="collections.html#separates"><div class="img"><img src="https://images.unsplash.com/photo-1580651214613-f4692d6d138f?auto=format&fit=crop&w=600&q=75" alt="woman in a white long-sleeved shirt and blue trousers" width="600" height="860" loading="lazy"></div><h3>Separates</h3><p>Shirts, trousers and soft layers</p></a>
      <a class="arch-tile" href="collections.html#accessories"><div class="img"><img src="https://images.unsplash.com/photo-1524679813234-66a389fe1a42?auto=format&fit=crop&w=600&q=75" alt="two brown woven straw tote bags" width="600" height="860" loading="lazy"></div><h3>Accessories</h3><p>Straw bags, scarves and jewellery</p></a>
    </div>
  </div>
</section>

<!-- 4. Fabric library -->
<section class="fabric" aria-labelledby="fab-title">
  <div class="wrap">
    <span class="eyebrow">The fabric library</span>
    <h2 id="fab-title">Know what you&#8217;re wearing</h2>
    <p style="max-width:620px;margin-bottom:34px">Fabric decides how a garment feels at four in the afternoon, not just how it looks in the fitting room. Here are the four we work with most, and what each one is good at.</p>
    <div class="tabs" role="tablist" aria-label="Fabrics">
      <button class="tab" role="tab" id="t-linen" aria-selected="true" aria-controls="p-linen">Linen</button>
      <button class="tab" role="tab" id="t-silk" aria-selected="false" aria-controls="p-silk">Silk</button>
      <button class="tab" role="tab" id="t-voile" aria-selected="false" aria-controls="p-voile">Cotton voile</button>
      <button class="tab" role="tab" id="t-knit" aria-selected="false" aria-controls="p-knit">Fine knit</button>
    </div>
    <div class="panel" role="tabpanel" id="p-linen" aria-labelledby="t-linen">
      <div class="img"><img src="https://images.unsplash.com/photo-1615799998603-7c6270a45196?auto=format&fit=crop&w=700&q=75" alt="close-up of white woven linen textile" width="700" height="875" loading="lazy"></div>
      <div>
        <h3>Linen: cool, honest, better with age</h3>
        <p>Linen comes from the flax plant and has been worn in hot climates for thousands of years. Its long fibres let air move freely and pull moisture away from the skin, which is why a linen dress feels noticeably cooler than a cotton one of the same weight.</p>
        <p>We use a mid-weight, garment-washed linen that arrives already soft. It will crease, and we think that relaxed texture is part of the charm.</p>
        <dl><dt>Feels</dt><dd>Dry, cool, slightly textured</dd><dt>Best for</dt><dd>Hot days, travel, shirt dresses and trousers</dd><dt>Care</dt><dd>Cool machine wash, line dry, steam if needed</dd></dl>
      </div>
    </div>
    <div class="panel" role="tabpanel" id="p-silk" aria-labelledby="t-silk" hidden>
      <div class="img"><img src="https://images.unsplash.com/photo-1761117228880-df2425bd70da?auto=format&fit=crop&w=700&q=75" alt="woman in a red silky blouse with a necklace" width="700" height="875" loading="lazy"></div>
      <div>
        <h3>Silk: the fabric that moves before you do</h3>
        <p>Silk is a natural protein fibre, light and strong for its weight. It regulates temperature well, so it rarely feels clammy, and it drapes in soft folds that flatter almost any shape.</p>
        <p>Our silks are mostly sand-washed crepe de chine, which has a matte, peachy handle and is less prone to showing water marks than shiny satins.</p>
        <dl><dt>Feels</dt><dd>Smooth, fluid, gently warm</dd><dt>Best for</dt><dd>Blouses, slip dresses, evening scarves</dd><dt>Care</dt><dd>Hand wash cold with a mild detergent, dry flat in shade</dd></dl>
      </div>
    </div>
    <div class="panel" role="tabpanel" id="p-voile" aria-labelledby="t-voile" hidden>
      <div class="img"><img src="https://images.unsplash.com/photo-1629200468328-87bf3adfb78b?auto=format&fit=crop&w=700&q=75" alt="woman in a white floral lace long-sleeved cotton dress" width="700" height="875" loading="lazy"></div>
      <div>
        <h3>Cotton voile: the lightest thing in your wardrobe</h3>
        <p>Voile is woven from finely twisted cotton yarns into a sheer, airy cloth. It is crisp without being stiff, holds gathers and tiers beautifully, and dries in no time after a wash.</p>
        <p>Because it is semi-sheer, we line voile where it counts and leave sleeves and hems unlined so they float.</p>
        <dl><dt>Feels</dt><dd>Airy, crisp, cool to touch</dd><dt>Best for</dt><dd>Tiered dresses, peasant blouses, cover-ups</dd><dt>Care</dt><dd>Gentle cycle in a wash bag, hang to dry</dd></dl>
      </div>
    </div>
    <div class="panel" role="tabpanel" id="p-knit" aria-labelledby="t-knit" hidden>
      <div class="img"><img src="https://images.unsplash.com/photo-1557303696-f0a415dc1b3e?auto=format&fit=crop&w=700&q=75" alt="close-up of a soft brown knitted texture" width="700" height="875" loading="lazy"></div>
      <div>
        <h3>Fine knit: for the evenings that turn cool</h3>
        <p>A breezy summer wardrobe still needs one warm layer. Our fine-gauge cotton and merino blend knits are light enough to roll into a tote and warm enough for a sea breeze after sunset.</p>
        <p>They are finished with clean, flat seams so they sit smoothly under a slip dress or over a linen shirt.</p>
        <dl><dt>Feels</dt><dd>Soft, springy, lightly warm</dd><dt>Best for</dt><dd>Cardigans, shells, travel layers</dd><dt>Care</dt><dd>Hand wash or wool cycle, reshape and dry flat</dd></dl>
      </div>
    </div>
  </div>
</section>

<!-- 5. Pieces -->
<section class="pieces" aria-labelledby="pieces-title">
  <div class="wrap">
    <div class="center-head">
      <span class="eyebrow">Pieces of the season</span>
      <h2 id="pieces-title">Six dresses we keep reaching for</h2>
      <p>These are the shapes our studio team actually wears on repeat. Each is made in a small run, so sizes come and go quickly.</p>
    </div>
    <div class="piece-grid">
      <article class="piece">
        <div class="img"><span class="tag">New</span><img src="https://images.unsplash.com/photo-1609357605129-26f69add5d6e?auto=format&fit=crop&w=700&q=75" alt="woman in a green long-sleeved midi dress standing in a field" width="700" height="875" loading="lazy"></div>
        <div class="meta"><h3>The Meadow Midi</h3><span class="fab">Crepe</span></div>
        <p>A long-sleeved midi in a soft sage crepe with a gently gathered waist. It sits easily on the body and moves well when you walk, so it works on a spring afternoon or with boots when the weather cools.</p>
      </article>
      <article class="piece">
        <div class="img"><span class="tag">Bestseller</span><img src="https://images.unsplash.com/photo-1562349486-3355f0c8cefa?auto=format&fit=crop&w=700&q=75" alt="woman wearing a red three-quarter-sleeved wrap dress" width="700" height="875" loading="lazy"></div>
        <div class="meta"><h3>The Rosa Wrap</h3><span class="fab">Viscose</span></div>
        <p>A true wrap dress with three-quarter sleeves and a tie you can pull as tight or as loose as you like. The red is warm rather than bright, and the length lands just below the knee.</p>
      </article>
      <article class="piece">
        <div class="img"><img src="https://images.unsplash.com/photo-1583433306546-ded68847fd0d?auto=format&fit=crop&w=700&q=75" alt="woman in a green and purple floral print dress" width="700" height="875" loading="lazy"></div>
        <div class="meta"><h3>The Orchard Print</h3><span class="fab">Cotton voile</span></div>
        <p>Tiered cotton voile in a painterly floral print. Light enough for the hottest days, with a fully lined bodice so it is never too sheer where it matters.</p>
      </article>
      <article class="piece">
        <div class="img"><img src="https://images.unsplash.com/photo-1559629008-529e95644695?auto=format&fit=crop&w=700&q=75" alt="woman wearing a pink sleeveless slip dress" width="700" height="875" loading="lazy"></div>
        <div class="meta"><h3>The Blush Slip</h3><span class="fab">Silk blend</span></div>
        <p>A bias-cut slip in a dusty blush tone. On its own for warm evenings, or layered under a knit and over a tee when the season turns.</p>
      </article>
      <article class="piece">
        <div class="img"><span class="tag">Back in stock</span><img src="https://images.unsplash.com/photo-1562292817-58d294c3a7e3?auto=format&fit=crop&w=700&q=75" alt="woman in an orange V-neck A-line linen dress" width="700" height="875" loading="lazy"></div>
        <div class="meta"><h3>The Sunday A-Line</h3><span class="fab">Linen</span></div>
        <p>An easy V-neck A-line in washed linen, the colour of late-summer apricots. Deep side pockets, a relaxed shape and nothing fussy.</p>
      </article>
      <article class="piece">
        <div class="img"><img src="https://images.unsplash.com/photo-1613966570650-add3cf83aa83?auto=format&fit=crop&w=700&q=75" alt="woman in a blue and white sleeveless sundress with a yellow sun hat" width="700" height="875" loading="lazy"></div>
        <div class="meta"><h3>The Harbour Sundress</h3><span class="fab">Cotton poplin</span></div>
        <p>Blue and white poplin, a fitted bodice and a full skirt that catches the breeze. Made for long days by the water and pairs well with a wide-brimmed hat.</p>
      </article>
    </div>
    <p style="text-align:center;margin-top:50px"><a class="btn" href="collections.html#dresses">See every dress</a></p>
  </div>
</section>

<!-- 6. Quote band -->
<section class="quote-band">
  <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?auto=format&fit=crop&w=1800&q=75" alt="woman walking along the seaside holding a woven bag" width="1800" height="1197" loading="lazy">
  <blockquote>&ldquo;Good summer clothing should feel like you forgot you were wearing it.&rdquo;<cite>A note pinned above our cutting table</cite></blockquote>
</section>

<!-- 7. How to wear -->
<section class="wear" aria-labelledby="wear-title">
  <div class="wrap">
    <div class="center-head">
      <span class="eyebrow">Styling notes</span>
      <h2 id="wear-title">Three easy ways to wear it</h2>
      <p>No rules, just a few combinations that have served us well from city pavements to seaside towns.</p>
    </div>
    <div class="wear-list">
      <div class="wear-item">
        <div class="img"><img src="https://images.unsplash.com/photo-1764298493197-a1c1cce57800?auto=format&fit=crop&w=1000&q=75" alt="woman in a straw hat and linen dress standing against a sunlit wall" width="1000" height="688" loading="lazy"></div>
        <div class="card">
          <span class="num">No. 01</span>
          <h3>The linen day dress, three ways</h3>
          <p>A loose linen dress is the most flexible thing you can pack. Change the shoes and the bag, and it becomes a different outfit.</p>
          <ul><li>Morning market: flat sandals, straw tote, hair pulled back</li><li>Lunch in town: a belt at the waist and a slim gold chain</li><li>Evening: a fine knit over the shoulders and a low block heel</li></ul>
        </div>
      </div>
      <div class="wear-item">
        <div class="img"><img src="https://images.unsplash.com/photo-1613915617430-8ab0fd7c6baf?auto=format&fit=crop&w=1000&q=75" alt="person in a relaxed blazer and wide trousers with a hand in a pocket" width="1000" height="688" loading="lazy"></div>
        <div class="card">
          <span class="num">No. 02</span>
          <h3>Soft tailoring for warm offices</h3>
          <p>Swap a structured suit for an unlined linen blazer and wide-leg trousers in the same tone. It reads polished but lets air circulate all day.</p>
          <ul><li>Keep the palette tight: sand, stone or sage</li><li>Tuck in a silk shell rather than a cotton shirt</li><li>Finish with loafers or a minimal leather sandal</li></ul>
        </div>
      </div>
      <div class="wear-item">
        <div class="img"><img src="https://images.unsplash.com/photo-1759355346769-bc38a7c3e5e5?auto=format&fit=crop&w=1000&q=75" alt="woman wearing a floral patterned shawl with fringe" width="1000" height="688" loading="lazy"></div>
        <div class="card">
          <span class="num">No. 03</span>
          <h3>One scarf, a whole trip</h3>
          <p>A large, lightweight scarf does more work than almost anything else in a suitcase: shade, warmth on a plane, a sarong at the beach.</p>
          <ul><li>Knot it at the hip over a swimsuit</li><li>Drape it loosely over a simple dress at dusk</li><li>Tie it through the handle of a woven bag for colour</li></ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 8. Atelier -->
<section class="atelier" aria-labelledby="atelier-title">
  <div class="wrap atelier-grid">
    <div class="collage">
      <div class="a"><img src="https://images.unsplash.com/photo-1787505136265-9a99dad3bbac?auto=format&fit=crop&w=700&q=75" alt="designer cutting white fabric on a table in a sewing studio" width="700" height="875" loading="lazy"></div>
      <div class="b"><img src="https://images.unsplash.com/photo-1536867520774-5b4f2628a69b?auto=format&fit=crop&w=500&q=75" alt="white tape measure and grey scissors on a work surface" width="500" height="500" loading="lazy"></div>
    </div>
    <div>
      <span class="eyebrow">How we make things</span>
      <h2 id="atelier-title">Slow decisions, careful seams</h2>
      <p>Every Voile Kingdom piece begins as a paper pattern and a length of cloth on our studio table. We test each shape on real bodies, in real weather, before it goes anywhere near production.</p>
      <ol class="values">
        <li><div><h3>Fabric first</h3><p>We choose the cloth, then design the shape around how it hangs, rather than forcing a fabric into a sketch.</p></div></li>
        <li><div><h3>Small seasonal runs</h3><p>We release a handful of pieces each season and make them in limited quantities to avoid piles of unsold stock.</p></div></li>
        <li><div><h3>Finished to last</h3><p>French seams on sheer fabrics, reinforced pockets and real buttons, because details are what keep a garment wearable for years.</p></div></li>
      </ol>
    </div>
  </div>
</section>

<!-- 9. Care -->
<section class="care" aria-labelledby="care-title">
  <div class="wrap">
    <div class="care-box">
      <div class="img"><img src="https://images.unsplash.com/photo-1582719188393-bb71ca45dbb9?auto=format&fit=crop&w=900&q=75" alt="rows of colourful knitwear hanging neatly on a clothing rail" width="900" height="1000" loading="lazy"></div>
      <div class="care-copy">
        <span class="eyebrow">Care notes</span>
        <h2 id="care-title">Look after it, and it will look after you</h2>
        <p>Most of the wear on a garment happens in the washing machine, not on your body. A few small habits make a big difference.</p>
        <div class="care-grid">
          <div><h3>Wash less</h3><p>Air a dress overnight after a light wear. Natural fibres refresh well on their own.</p></div>
          <div><h3>Go cool</h3><p>Cold or 30&deg;C washes protect colour and stop natural fibres from shrinking.</p></div>
          <div><h3>Skip the dryer</h3><p>Tumble drying is hard on linen and silk. Line or flat drying keeps the shape true.</p></div>
          <div><h3>Store with space</h3><p>Give flowing pieces room on the rail so creases don&#8217;t set, and fold knits rather than hanging them.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 10. Lookbook mosaic -->
<section class="mosaic-sec" aria-labelledby="look-title">
  <div class="wrap">
    <div class="sec-head">
      <div><span class="eyebrow">Seen by the sea</span><h2 id="look-title">A little lookbook</h2></div>
      <p>Warm light, open skies and fabric doing what it does best. A few moments from the season that shaped this collection.</p>
    </div>
    <div class="mosaic">
      <figure class="m1"><img src="https://images.unsplash.com/photo-1622090567079-343116452be0?auto=format&fit=crop&w=700&q=75" alt="woman in a black and white floral dress and red sun hat on the beach" width="700" height="1000" loading="lazy"><figcaption>Floral &amp; red hat</figcaption></figure>
      <figure class="m2"><img src="https://images.unsplash.com/photo-1519307060515-209ebd006397?auto=format&fit=crop&w=800&q=75" alt="woman standing on coastal rocks by the sea in a long dress" width="800" height="600" loading="lazy"><figcaption>Coastal rocks</figcaption></figure>
      <figure class="m3"><img src="https://images.unsplash.com/photo-1589400363677-81704324e25b?auto=format&fit=crop&w=800&q=75" alt="woman in a red sleeveless dress standing on a bridge" width="800" height="600" loading="lazy"><figcaption>Red on the bridge</figcaption></figure>
      <figure class="m4"><img src="https://images.unsplash.com/photo-1578056926888-f8d68a8bc58f?auto=format&fit=crop&w=500&q=75" alt="woman in a red dress walking beside the seashore" width="500" height="400" loading="lazy"></figure>
      <figure class="m5"><img src="https://images.unsplash.com/photo-1628712825039-bd75c6bd7bc8?auto=format&fit=crop&w=900&q=75" alt="woman in a brown dress standing on the beach at sunset" width="900" height="400" loading="lazy"><figcaption>Golden hour</figcaption></figure>
    </div>
  </div>
</section>

<!-- 11. Promises -->
<section class="promises" aria-label="Our promises">
  <div class="wrap promise-row">
    <div class="promise"><strong>Free US shipping</strong><span>On orders over $150, sent in recycled packaging.</span></div>
    <div class="promise"><strong>30-day returns</strong><span>Unworn pieces with tags can be returned for a refund.</span></div>
    <div class="promise"><strong>Natural fibres</strong><span>Linen, silk and cotton make up most of every collection.</span></div>
    <div class="promise"><strong>Real people reply</strong><span>Questions go to our small New York team, not a script.</span></div>
  </div>
</section>

<!-- 12. FAQ -->
<section class="faq" aria-labelledby="faq-title">
  <div class="wrap faq-grid">
    <div class="sticky">
      <span class="eyebrow">Good to know</span>
      <h2 id="faq-title">Questions we hear often</h2>
      <p style="color:var(--muted)">Can&#8217;t find what you need? Our team is happy to help with sizing, fabric or an order.</p>
      <a class="btn" href="contact.html">Ask us anything</a>
    </div>
    <div>
        <details open>
          <summary>How do your dresses usually fit?</summary>
          <p>Most of our dresses are cut with ease through the body, so they skim rather than cling. If you like a closer fit through the shoulders, or you sit between sizes, the smaller size is usually the better choice. Each piece in the Fabric &amp; Size Guide lists garment measurements, so you can compare against something you already own and love.</p>
        </details>
        <details>
          <summary>Will linen crease?</summary>
          <p>Yes, and that is part of its character. Linen creases softly and relaxes as you wear it, and the fibre gets smoother with every wash. If you prefer a crisper look, a quick steam on the reverse side while the garment is still slightly damp works far better than a hot, dry iron.</p>
        </details>
        <details>
          <summary>What is cotton voile, exactly?</summary>
          <p>Voile is a lightweight, semi-sheer plain weave made from tightly twisted yarns. It feels cool and a little crisp against the skin, holds gathers beautifully and dries quickly. It is the fabric our name comes from, and it shows up in many of our summer blouses and tiered dresses.</p>
        </details>
        <details>
          <summary>How long does delivery take?</summary>
          <p>Orders within the continental United States usually arrive in 3 to 6 business days with standard shipping. Express options are shown at checkout. Full details, including international shipping, are on our Shipping Policy page.</p>
        </details>
        <details>
          <summary>Can I return something that doesn&#8217;t work for me?</summary>
          <p>Unworn, unwashed pieces with their tags attached can be returned within 30 days of delivery. We will refund the original payment method once the item has been received and checked. Our Returns &amp; Refunds page explains the steps and the few exceptions.</p>
        </details>
        <details>
          <summary>Do you restock sold-out pieces?</summary>
          <p>Sometimes. We produce in small runs, and a few core shapes come back each season in new fabrics. If there is a piece you missed, write to us through the contact page and we will let you know honestly whether it is likely to return.</p>
        </details>
    </div>
  </div>
</section>

<!-- 13. Letter -->
<section class="letter" id="letter" aria-labelledby="letter-title">
  <div class="wrap">
    <div class="letter-box">
      <div class="img"><img src="https://images.unsplash.com/photo-1763056531605-4e75d78e5016?auto=format&fit=crop&w=800&q=75" alt="woman holding a woven bag with charms by the sea" width="800" height="840" loading="lazy"></div>
      <div class="letter-copy">
        <span class="eyebrow" style="color:var(--clay-soft)">The Voile Kingdom letter</span>
        <h2 id="letter-title">A short note, once a month</h2>
        <p>New pieces before they sell out, honest care tips and the occasional story from the studio. No daily emails, and you can unsubscribe at any time.</p>
        <?php if ($newsletterMsg): ?>
          <p class="alert<?php echo $newsletterOk ? '' : ' err'; ?>" role="status"><?php echo htmlspecialchars($newsletterMsg, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>
        <form class="letter-form" method="post" action="index.php#letter">
          <label for="nl-email" class="skip">Email address</label>
          <input type="email" id="nl-email" name="newsletter_email" placeholder="Your email address" required autocomplete="email">
          <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
          <button class="btn" type="submit">Subscribe</button>
        </form>
        <p class="form-note">By subscribing you agree to our <a href="privacy-policy.html" style="color:#fff">Privacy Policy</a>.</p>
      </div>
    </div>
  </div>
</section>

</main>
<footer class="site-footer">
  <div class="wrap">
    <div class="foot-mark">Voile <em>Kingdom</em></div>
    <div class="foot-cols">
      <div>
        <h4>The House</h4>
        <p>Light, breathable clothing cut to move with you, from linen shirt dresses to silk scarves. Designed in New York and released in small seasonal runs.</p>
      </div>
      <div>
        <h4>Explore</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="collections.html">Collections</a></li>
          <li><a href="fabric-guide.html">Fabric &amp; Size Guide</a></li>
          <li><a href="about.html">Our Story</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
      <div>
        <h4>Policies</h4>
        <ul>
          <li><a href="privacy-policy.html">Privacy Policy</a></li>
          <li><a href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
          <li><a href="shipping-policy.html">Shipping Policy</a></li>
          <li><a href="return-refund-policy.html">Returns &amp; Refunds</a></li>
          <li><a href="cookie-policy.html">Cookie Policy</a></li>
          <li><a href="disclaimer.html">Disclaimer</a></li>
        </ul>
      </div>
      <div>
        <h4>Visit &amp; Call</h4>
        <p>181 Mercer Street, New York, NY 10012, United States</p>
        <p><a href="tel:+18887775845">+1-888-777-5845</a><br><a href="mailto:info@voilekingdom.com">info@voilekingdom.com</a></p>
      </div>
    </div>
    <div class="foot-bottom">
      <span>&copy; <?php echo date("Y"); ?> Voile Kingdom. All rights reserved.</span>
      <span>Photography sourced from Unsplash under the Unsplash License.</span>
    </div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice">
  <p>We use essential cookies to run this site and, with your permission, analytics cookies to understand how it is used. Read our <a href="cookie-policy.html">Cookie Policy</a>.</p>
  <div class="btns"><button class="accept" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
</div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
