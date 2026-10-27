/* ═══════════════════════════════════════════════
   NOVA HEIGHTS — ALUMNI PAGE JAVASCRIPT
   Alumni data, filter chips, profile modal, scroll
═══════════════════════════════════════════════ */

const ALUMNI = [
  {
    id: "david-kimani",
    name: "David Kimani",
    class: "Class of 2023",
    tagline:
      "Software Engineer at Google, Nairobi · Building the tools that power Africa's digital future.",
    industry: "Technology",
    industryColor: "#4CC9F0",
    chips: [
      "🎓 BSc Computer Science",
      "🏫 University of Edinburgh",
      "🌍 Google Nairobi",
    ],
    imgCard: "images/alumni5.jpg",
    imgFull: "images/kimani.jpg",
    story: `
      <div class="chapter"><span class="chapter-num">Chapter One</span><div class="chapter-line"></div><h2>The Boy Who Took Everything Apart</h2></div>
      <p>Long before he wrote a single line of code at Google's Nairobi offices, David Kimani had already dismantled every piece of electronics he could find in his family's Karen home. At eleven years old, the back of every remote control and radio was a portal to a universe he was determined to understand. His parents remember coming home to a television spread across the living room floor — and David, unhurried, reading a repair manual borrowed from the school library.</p>
      <p>It was this innate intellectual hunger that caught the attention of Mr. Ochieng, Nova Heights' computer science teacher, who spotted David's talent during Form One orientation. <strong>Within his first semester, David had written a script that auto-graded multiple-choice quiz sheets for the entire humanities department</strong> — saving teachers hours of marking and earning himself a quiet but genuine legend among the staff.</p>
      <div class="pull-quote">
        <blockquote>"Nova Heights didn't just give me an education — it gave me a mindset. The critical thinking skills and global perspective I developed here have been the foundation of everything I've built since."</blockquote>
        <span class="quote-attr">— David Kimani, Class of 2023</span>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Two</span><div class="chapter-line"></div><h2>Edinburgh and the Making of an Engineer</h2></div>
      <p>When David received his unconditional offer from the University of Edinburgh's School of Informatics, it was the culmination of four years of A-Level brilliance. He scored an A* in Computer Science and Mathematics — grades that placed him in the top 2% of candidates in East Africa. His extended essay, a 4,000-word analysis of algorithmic bias in sub-Saharan data systems, was submitted to the International Baccalaureate as a model response.</p>
      <p>Edinburgh was transformative. In his third year, David joined the university's AI research lab, contributing to a paper on <em>low-resource natural language processing for African languages</em> that would later be cited in Google DeepMind's foundational research. He graduated with First Class Honours in 2023 and received two job offers before he'd even walked across the stage to collect his degree.</p>
      <div class="achievements-grid">
        <div class="achievement-card"><div class="achievement-icon">🏆</div><div><div class="achievement-title">IB Top 2% East Africa</div><div class="achievement-desc">A* Computer Science · A* Mathematics · A Biology</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🔬</div><div><div class="achievement-title">Co-authored AI Research Paper</div><div class="achievement-desc">African NLP at Edinburgh University Lab, cited by DeepMind</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">💻</div><div><div class="achievement-title">First Class Honours</div><div class="achievement-desc">BSc Computer Science, University of Edinburgh, 2023</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🌍</div><div><div class="achievement-title">Google Nairobi, L4 SWE</div><div class="achievement-desc">Working on Google Maps data infrastructure for sub-Saharan Africa</div></div></div>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Three</span><div class="chapter-line"></div><h2>Coming Home to Build</h2></div>
      <p>Most of David's Edinburgh classmates headed for Silicon Valley or London. David chose Nairobi. It wasn't sentimentality — it was strategy. <strong>"The density of unsolved problems in Nairobi is higher than anywhere else I know,"</strong> he told a TechCabal journalist in 2024. "Every challenge here is an opportunity at scale."</p>
      <p>At Google's Nairobi Engineering Hub, David works on Maps infrastructure for sub-Saharan Africa — specifically on improving the accuracy of last-mile addressing in regions where formal street addresses don't exist. His team's work has already improved delivery accuracy for over 3 million users across Kenya, Uganda, and Tanzania.</p>
      <p>On evenings and weekends, he mentors Form Five students at Nova Heights through the school's tech mentorship programme — the same programme that once guided him.</p>
      <div class="nova-connection">
        <div class="heading">🏫 His Nova Heights Chapter</div>
        <p>David credits Mr. Ochieng's Computer Science classes and the annual Inter-School Coding Olympiad — which Nova Heights has won three consecutive times — for instilling in him the discipline to compete at the highest level. "The standard Mr. Ochieng held us to was the same standard I needed at Edinburgh," he says. "There was no culture shock. There was only continuity."</p>
      </div>
    `,
    timeline: [
      {
        year: "2017",
        icon: "🏫",
        title: "Joins Nova Heights Form One",
        desc: "Karen, Nairobi — immediately distinguishes himself in Computing.",
      },
      {
        year: "2019",
        icon: "🥇",
        title: "Wins National Coding Olympiad",
        desc: "Leads Nova Heights team to first national title in under-16 category.",
      },
      {
        year: "2023",
        icon: "🎓",
        title: "Graduates University of Edinburgh",
        desc: "First Class Honours, BSc Computer Science. Highest-ranked international student.",
      },
      {
        year: "2023",
        icon: "🌍",
        title: "Joins Google Nairobi",
        desc: "Software Engineer L4, Maps Infrastructure team for sub-Saharan Africa.",
      },
    ],
  },

  {
    id: "amara-diallo",
    name: "Dr. Amara Diallo",
    class: "Class of 2015",
    tagline:
      "Consultant Cardiologist, Kenyatta National Hospital · Pioneering cardiac care across East Africa.",
    industry: "Medicine",
    industryColor: "#06D6A0",
    chips: [
      "🎓 MBChB, UoN",
      "❤️ Cardiology Specialist",
      "🏥 Kenyatta National Hospital",
    ],
    imgCard: "images/alumni6.jpg",
    imgFull: "images/Dr.jpg",
    story: `
      <div class="chapter"><span class="chapter-num">Chapter One</span><div class="chapter-line"></div><h2>A Calling Before the Letters</h2></div>
      <p>Amara Diallo was twelve years old when her grandmother suffered a mild heart attack in their Westlands home. The ambulance took forty minutes to arrive. That forty minutes changed the course of her life. From that evening forward, Amara knew she would become a doctor — and she would make sure no one in Kenya waited forty minutes for cardiac care again.</p>
      <p>She arrived at Nova Heights in 2009 with a clarity of purpose unusual for a thirteen-year-old. <strong>By the end of Form Two, she had read every biology textbook the school library carried, had memorised the major cardiac drug protocols, and had quietly become the person her classmates consulted when they needed to understand complex anatomy.</strong></p>
      <div class="pull-quote">
        <blockquote>"The science programme at Nova Heights was exceptional. My A-Level Biology and Chemistry prepared me so thoroughly that first year at medical school felt like revision. I owe so much to my teachers here."</blockquote>
        <span class="quote-attr">— Dr. Amara Diallo, Class of 2015</span>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Two</span><div class="chapter-line"></div><h2>Medical School and the Alchemy of Excellence</h2></div>
      <p>Amara's A-Level results were extraordinary: A* in Biology, A* in Chemistry, A in Physics. She was admitted to the University of Nairobi Medical School with the highest entry score from any Nova Heights student in the school's history at the time. Her professors describe her as one of those rare students who arrives already knowing <em>how</em> to learn — systematic, tireless, and incapable of accepting a shallow explanation.</p>
      <p>She specialised in cardiology after witnessing the disparity in cardiac care between private and public hospitals during her clinical rotations. Her final-year dissertation — a population study of rheumatic heart disease in Nairobi's informal settlements — was published in the East African Medical Journal and downloaded over 12,000 times in its first year.</p>
      <div class="achievements-grid">
        <div class="achievement-card"><div class="achievement-icon">❤️</div><div><div class="achievement-title">Consultant Cardiologist</div><div class="achievement-desc">Kenyatta National Hospital — Kenya's leading cardiac unit</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">📖</div><div><div class="achievement-title">Published Researcher</div><div class="achievement-desc">East African Medical Journal · 12,000+ downloads first year</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🏥</div><div><div class="achievement-title">KNH Cardiac Surgery Programme</div><div class="achievement-desc">Lead physician on paediatric cardiac intervention programme</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🌍</div><div><div class="achievement-title">WHO East Africa Advisor</div><div class="achievement-desc">Appointed 2024, cardiovascular disease prevention task force</div></div></div>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Three</span><div class="chapter-line"></div><h2>Forty Minutes, Reimagined</h2></div>
      <p>Today Dr. Diallo leads the paediatric cardiac intervention programme at Kenyatta National Hospital — the same hospital whose corridors once felt impossibly distant when she was a twelve-year-old watching her grandmother struggle to breathe. <strong>Her team has performed over 340 open-heart surgeries on children under fourteen, with a survival rate that rivals specialist centres in South Africa and the United Kingdom.</strong></p>
      <p>In 2024, she was appointed to the World Health Organization's East Africa Cardiovascular Disease Prevention Task Force. She is currently co-authoring Kenya's national cardiac care guidelines, which will set the standard for all public hospitals across the country.</p>
      <p>When she visits Nova Heights to speak to students — which she does twice a year, without fail — she always ends with the same question: "What forty minutes will you refuse to accept?"</p>
      <div class="nova-connection">
        <div class="heading">🏫 Her Nova Heights Chapter</div>
        <p>Amara credits her Biology teacher, Ms. Wanjiku, for transforming what could have been rote memorisation into genuine scientific inquiry. "She taught us that medicine isn't just about knowing what — it's about asking why, and then asking why again. That principle has guided every diagnosis I've made." The school's annual Health Sciences Fair, which Amara won twice, gave her first experience presenting research to a critical audience.</p>
      </div>
    `,
    timeline: [
      {
        year: "2009",
        icon: "🏫",
        title: "Joins Nova Heights",
        desc: "Enters with a clear ambition: to become a cardiologist.",
      },
      {
        year: "2015",
        icon: "🎓",
        title: "A-Levels: A* A* A",
        desc: "Top Nova Heights science graduate. Highest UoN medical entry score.",
      },
      {
        year: "2021",
        icon: "🏥",
        title: "Qualifies as Cardiologist",
        desc: "Specialist registration, Kenya Medical Practitioners Board.",
      },
      {
        year: "2024",
        icon: "🌍",
        title: "WHO Task Force Appointment",
        desc: "Youngest member of WHO East Africa Cardiovascular Prevention group.",
      },
    ],
  },

  {
    id: "kwame-asante",
    name: "Kwame Asante",
    class: "Class of 2018",
    tagline:
      "Co-Founder & CEO, Pesa Technologies · Africa's fastest-growing fintech, valued at $280M.",
    industry: "Business",
    industryColor: "#E8B84B",
    chips: [
      "💼 CEO & Co-Founder",
      "📈 Forbes 30 Under 30 Africa 2024",
      "🚀 $280M Valuation",
    ],
    imgCard: "images/alumni7.jpg",
    imgFull: "images/kwame.jpg",
    story: `
      <div class="chapter"><span class="chapter-num">Chapter One</span><div class="chapter-line"></div><h2>The Boy with the Side Hustle</h2></div>
      <p>Every school has that student who turns every situation into a transaction — and Nova Heights had Kwame Asante. By Form Three, he had run five small businesses within school grounds: a phone-charging service from his dormitory socket, a handwritten newsletter sold for twenty shillings an issue, a second-hand textbook exchange programme, a snack arbitrage operation between the tuck shop and the boys' hostels, and — his most ambitious — a peer-to-peer exam revision materials marketplace that 60% of his year group used.</p>
      <p>Teachers could have found ways to shut him down. Instead, the school's Deputy Principal, Mr. Kamau, sat Kwame down after he discovered the textbook marketplace and gave him a piece of advice that would shape his life: <strong>"You're not breaking rules, Kwame. You're solving problems. Learn to keep doing that legally, at scale."</strong></p>
      <div class="pull-quote">
        <blockquote>"I started my first business at 16, right here at Nova Heights. The entrepreneurship programme, the mentorship from teachers, and the confidence this school built in me — that's what became Pesa Technologies."</blockquote>
        <span class="quote-attr">— Kwame Asante, Class of 2018</span>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Two</span><div class="chapter-line"></div><h2>The Gap Year That Changed Everything</h2></div>
      <p>Kwame deferred his economics degree acceptance at the University of Cape Town to spend a year working with a microfinance NGO in Kisumu. What he saw in the field shocked him: <em>small traders with perfect repayment records being denied loans because banks had no way to verify their informal income</em>. A trader who made KSh 3,000 daily in cash had zero financial identity.</p>
      <p>He spent the year building a prototype — a mobile application that could aggregate M-Pesa transaction history, airtime purchase patterns, and social vouching networks to create an alternative credit score. He showed it to his UCT economics professor on his first day back. The professor introduced him to a venture capitalist. <strong>Within six months of starting university, Kwame had dropped out, incorporated Pesa Technologies, and closed a seed round of $400,000.</strong></p>
      <div class="achievements-grid">
        <div class="achievement-card"><div class="achievement-icon">💰</div><div><div class="achievement-title">$280M Valuation</div><div class="achievement-desc">Pesa Technologies Series B close, 2024. Africa's fastest-growing fintech.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🏆</div><div><div class="achievement-title">Forbes 30 Under 30 Africa</div><div class="achievement-desc">2024 Class — Finance &amp; Technology category.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">📱</div><div><div class="achievement-title">2.4M Active Users</div><div class="achievement-desc">Pesa Credit operating in Kenya, Uganda, Tanzania, and Rwanda.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🌱</div><div><div class="achievement-title">Nova Heights Scholarship Fund</div><div class="achievement-desc">Kwame funds 12 full bursaries at Nova Heights annually.</div></div></div>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Three</span><div class="chapter-line"></div><h2>Building the Bank Africa Never Had</h2></div>
      <p>Pesa Technologies today operates across four East African countries and has extended credit to over 2.4 million customers who had never previously accessed formal finance. Its proprietary credit-scoring algorithm — the one Kwame sketched in a notebook in Kisumu — processes over 140 data points in real time and has a default rate four percentage points lower than the regional banking average.</p>
      <p>Kwame rarely gives interviews, but when he does, he consistently returns to one theme: <strong>"Africa doesn't have a poverty problem — it has a financial infrastructure problem. We're fixing the plumbing."</strong> In 2025, Pesa Technologies opened its headquarters in a renovated building in Westlands, Nairobi — three kilometres from Nova Heights' front gate.</p>
      <div class="nova-connection">
        <div class="heading">🏫 His Nova Heights Chapter</div>
        <p>Kwame has endowed twelve full annual bursaries at Nova Heights — named the "First Hustle Fund" — for students from low-income backgrounds who demonstrate entrepreneurial thinking. "Nova Heights gave me the space to be ambitious when I had no reason to be," he said at the endowment ceremony. "This is my way of paying that forward."</p>
      </div>
    `,
    timeline: [
      {
        year: "2012",
        icon: "🏫",
        title: "Joins Nova Heights Form One",
        desc: "Already running his first peer-to-peer marketplace within weeks.",
      },
      {
        year: "2018",
        icon: "📱",
        title: "Builds Pesa Prototype",
        desc: "Kisumu gap year — first alternative credit-scoring MVP.",
      },
      {
        year: "2019",
        icon: "🚀",
        title: "Pesa Technologies Founded",
        desc: "Drops out of UCT. $400K seed round closed in 6 months.",
      },
      {
        year: "2024",
        icon: "🏆",
        title: "Forbes 30 Under 30 · $280M Valuation",
        desc: "Series B close. Operations across 4 countries, 2.4M users.",
      },
    ],
  },

  {
    id: "zara-osei",
    name: "Zara Osei",
    class: "Class of 2020",
    tagline:
      "Award-winning filmmaker · Berlin International Film Festival selection 2025 · Telling Africa from the inside.",
    industry: "Arts & Culture",
    industryColor: "#FF6B9D",
    chips: [
      "🎬 Berlin Film Festival 2025",
      "🎥 Director & Screenwriter",
      "🌍 Pan-African Cinema",
    ],
    imgCard: "images/optimized/alumni-networking.jpg",
    imgFull: "images/optimized/alumni-networking.jpg",
    story: `
      <div class="chapter"><span class="chapter-num">Chapter One</span><div class="chapter-line"></div><h2>A Different Kind of Seeing</h2></div>
      <p>Zara Osei never thought in words — she thought in frames. Her primary school teachers noted it early: when asked to write an essay, she would first sketch a storyboard. When required to present a science project, she submitted a five-minute documentary she'd shot on her mother's phone. By the time she arrived at Nova Heights, she had already completed what she calls her "apprenticeship" — three years of filming every family event, neighbourhood ceremony, and school gathering she could find her way into.</p>
      <p><strong>In Form Four, she produced a 22-minute short film, "Between the Rain," about a Nairobi street vendor navigating the city during the election season.</strong> The film screened at the Nova Heights Arts Festival and was later selected for the Nairobi International Film Festival's student category — the youngest director ever to make the cut.</p>
      <div class="pull-quote">
        <blockquote>"Cinema is the most powerful lie that tells the truth. I want to make films that make Nairobi audiences feel truly seen — not explained, not pitied. Seen."</blockquote>
        <span class="quote-attr">— Zara Osei, Class of 2020</span>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Two</span><div class="chapter-line"></div><h2>Film School and the African Gaze</h2></div>
      <p>Zara studied at the New York Film Academy's Los Angeles campus on a partial scholarship, supplemented by a Nova Heights Arts Bursary. She graduated with distinction in 2023, having written and directed four short films that collectively screened at festivals in Lagos, Accra, São Paulo, and Toronto.</p>
      <p>Her thesis film, <em>"The Colour of November,"</em> a 38-minute drama about three generations of Ghanaian-Kenyan women reconciling with inheritance and identity, won Best Short Film at the Durban International Film Festival in 2024 and was acquired by Netflix Africa for its short-form documentary series.</p>
      <div class="achievements-grid">
        <div class="achievement-card"><div class="achievement-icon">🎬</div><div><div class="achievement-title">Berlin Film Festival 2025</div><div class="achievement-desc">Official selection, Panorama Shorts — first Kenyan in this category.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">📺</div><div><div class="achievement-title">Netflix Africa Acquisition</div><div class="achievement-desc">"The Colour of November" in Netflix Africa short documentary series.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🏆</div><div><div class="achievement-title">Durban IFF Best Short Film</div><div class="achievement-desc">2024 winner — jury praised "a landmark of contemporary African cinema."</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🎥</div><div><div class="achievement-title">Feature Film in Development</div><div class="achievement-desc">Co-production with Restless Nation Films. Filming in Nairobi, 2026.</div></div></div>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Three</span><div class="chapter-line"></div><h2>Berlin, and the First Feature</h2></div>
      <p>In 2025, Zara became the first Kenyan director selected for the Berlin International Film Festival's Panorama Shorts programme. Her entry, <em>"The Last Matatu,"</em> a 25-minute meditation on urban displacement told through the final route of a legendary Nairobi matatu driver, was described by the festival programme notes as "essential viewing for anyone who believes cinema can still expand the boundaries of human empathy."</p>
      <p>She is currently in pre-production for her debut feature film, a co-production between Nairobi and Accra. <strong>Filming begins in Nairobi in late 2026.</strong> She is twenty-three years old.</p>
      <div class="nova-connection">
        <div class="heading">🏫 Her Nova Heights Chapter</div>
        <p>Zara credits the school's annual Arts Festival, the Drama Society, and — above all — her Literature teacher Mr. Otieno, for showing her that storytelling is a discipline as rigorous as mathematics. "He taught us that every story is an argument," she recalls. "Once I understood that, filmmaking stopped being about pictures and became about truth."</p>
      </div>
    `,
    timeline: [
      {
        year: "2016",
        icon: "🏫",
        title: "Joins Nova Heights Form One",
        desc: "Already a prolific amateur documentarian with 30+ short films.",
      },
      {
        year: "2018",
        icon: "🎬",
        title: "Nairobi IFF Student Selection",
        desc: '"Between the Rain" — youngest-ever student selection at NIFF.',
      },
      {
        year: "2023",
        icon: "🎓",
        title: "New York Film Academy, Distinction",
        desc: "Four short films screened across four continents that year.",
      },
      {
        year: "2025",
        icon: "🌍",
        title: "Berlin Film Festival Selection",
        desc: "First Kenyan in Panorama Shorts. Feature film in pre-production.",
      },
    ],
  },

  {
    id: "tunde-adeyemi",
    name: "Tunde Adeyemi",
    class: "Class of 2010",
    tagline:
      "Cabinet Secretary, Ministry of Education, Kenya · Architect of Kenya's National Curriculum Reform 2025.",
    industry: "Public Service",
    industryColor: "#E85D04",
    chips: [
      "🏛️ Cabinet Secretary",
      "⚖️ LLB, University of Cape Town",
      "📋 Kenya Curriculum Reform",
    ],
    imgCard: "images/alumni8.jpg",
    imgFull: "images/alumni8.jpg",
    story: `
      <div class="chapter"><span class="chapter-num">Chapter One</span><div class="chapter-line"></div><h2>The Head Boy Who Argued Back</h2></div>
      <p>Tunde Adeyemi was Head Boy at Nova Heights in his final year — but not the kind of Head Boy who enforced rules without question. He was the kind who read the school charter, found the clauses that hadn't been updated since 1998, and wrote a formal memorandum to the Board of Governors proposing three specific amendments. The Board implemented two of them.</p>
      <p>This instinct — to find the gap between how institutions were meant to work and how they actually did, and then to close it — would define Tunde's entire career. <strong>He arrived at the University of Cape Town's Law Faculty with a suitcase and a conviction: that the law was the most powerful tool for social change available to anyone who was willing to understand it deeply enough.</strong></p>
      <div class="pull-quote">
        <blockquote>"Government is not the problem. Government is the instrument. The problem is that we keep letting it be played out of tune. My job is to be a tuner."</blockquote>
        <span class="quote-attr">— Tunde Adeyemi, Cabinet Secretary, 2025</span>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Two</span><div class="chapter-line"></div><h2>Law, Policy, and the Long Game</h2></div>
      <p>Tunde graduated from UCT with a First Class LLB, was called to the Kenya Bar in 2015, and spent six years at the State Law Office before being seconded to the Ministry of Education's Legal Affairs department. In 2022, Tunde was appointed Chief Director of Education Policy, and in 2024 was nominated by the President as Cabinet Secretary for Education. He was confirmed by Parliament by a vote of 198 to 11 — an unusually strong mandate reflecting genuine cross-party respect.</p>
      <div class="achievements-grid">
        <div class="achievement-card"><div class="achievement-icon">🏛️</div><div><div class="achievement-title">Cabinet Secretary, Education</div><div class="achievement-desc">Confirmed 2024. Oversees 17,000 public schools and 72,000 teachers.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">📚</div><div><div class="achievement-title">Curriculum Reform Architect</div><div class="achievement-desc">Led Kenya's National Competency-Based Curriculum rollout, 2025.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">⚖️</div><div><div class="achievement-title">Parliamentary Confirmation: 198–11</div><div class="achievement-desc">Strongest mandate for any CS in the 2024 cohort. Cross-party support.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🎓</div><div><div class="achievement-title">UCT First Class LLB</div><div class="achievement-desc">Top law graduate, 2014. Moot Court Champion, Southern Africa Regionals.</div></div></div>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Three</span><div class="chapter-line"></div><h2>Reforming the System He Once Navigated</h2></div>
      <p>As Cabinet Secretary, Tunde's signature initiative has been the Kenya National Curriculum Reform — an overhaul of the education system that moves away from rote memorisation toward competency-based learning. The reform, described by the World Bank as "the most ambitious curriculum restructuring in sub-Saharan Africa in two decades," affects every public school in the country.</p>
      <p><strong>Tunde has made it personal.</strong> He visits at least four schools per month — unannounced. He has sat in on over sixty classroom lessons in the past year, from Turkana to Mombasa. He has Nova Heights in his calendar for one of those visits each term.</p>
      <div class="nova-connection">
        <div class="heading">🏫 His Nova Heights Chapter</div>
        <p>Tunde considers his time as Head Boy the single most formative leadership experience of his life. "Managing 1,800 students and a prefect body is harder than managing a ministry," he jokes. But underneath the humour is genuine conviction: "Nova Heights taught me how to lead without coercion. That's rarer than any legal qualification I have."</p>
      </div>
    `,
    timeline: [
      {
        year: "2006",
        icon: "🏫",
        title: "Joins Nova Heights",
        desc: "Head Boy in final year. Wins National Debate Championship twice.",
      },
      {
        year: "2010",
        icon: "⚖️",
        title: "UCT Law — First Class LLB",
        desc: "Top graduate. Southern Africa Moot Court Champion.",
      },
      {
        year: "2022",
        icon: "📋",
        title: "Chief Director, Education Policy",
        desc: "Leads framework for national teacher accountability reform.",
      },
      {
        year: "2024",
        icon: "🏛️",
        title: "Cabinet Secretary, Education",
        desc: "Confirmed 198–11. Launches Kenya's national curriculum overhaul.",
      },
    ],
  },

  {
    id: "aisha-nkrumah",
    name: "Dr. Aisha Nkrumah",
    class: "Class of 2019",
    tagline:
      "Postdoctoral Researcher, MIT Media Lab · Developing AI systems for environmental monitoring in Africa.",
    industry: "Academia",
    industryColor: "#C77DFF",
    chips: [
      "🔬 MIT Media Lab",
      "🎓 PhD Environmental Engineering",
      "🌍 African Climate Tech",
    ],
    imgCard: "images/optimized/alumni-award.jpg",
    imgFull: "images/optimized/alumni-award.jpg",
    story: `
      <div class="chapter"><span class="chapter-num">Chapter One</span><div class="chapter-line"></div><h2>The Lake That Wasn't There Anymore</h2></div>
      <p>Aisha Nkrumah grew up spending school holidays at her family's property near Lake Naivasha. Between 2012 and 2016, she watched the water recede by nearly a kilometre. The papyrus beds that once stretched to the horizon contracted to a narrow fringe. The flamingos came in smaller flocks. Then stopped coming altogether for a season. At fifteen, she began keeping a notebook of measurements, photographs, and observations — data she didn't yet know how to use, but felt compelled to collect.</p>
      <p><strong>That notebook became the basis of her Extended Essay at Nova Heights: a six-year observational study of microclimatic changes at Lake Naivasha, cross-referenced with satellite imagery she accessed through NASA's public database.</strong> Her supervisor, Mrs. Achieng, submitted it to the International Youth Science Forum. It placed third globally.</p>
      <div class="pull-quote">
        <blockquote>"Africa is producing the least carbon per capita of any region and absorbing the worst consequences of climate change. That asymmetry is a scientific and moral emergency. I intend to spend my career closing it."</blockquote>
        <span class="quote-attr">— Dr. Aisha Nkrumah, Class of 2019</span>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Two</span><div class="chapter-line"></div><h2>From Naivasha to MIT</h2></div>
      <p>Aisha read Environmental Engineering at Imperial College London, graduating top of her cohort in 2023 with a First Class degree and the Imperial President's Medal — the highest academic honour. She received a full PhD scholarship from MIT's Department of Civil and Environmental Engineering.</p>
      <p>Her doctoral research developed a machine-learning model that could detect early warning signs of freshwater ecosystem collapse using satellite imagery and ground sensor networks, calibrated specifically for sub-Saharan African lake systems. Her PhD was awarded <em>with no corrections required</em> — a distinction given to fewer than 3% of MIT environmental engineering candidates.</p>
      <div class="achievements-grid">
        <div class="achievement-card"><div class="achievement-icon">🏆</div><div><div class="achievement-title">Imperial President's Medal</div><div class="achievement-desc">Top graduating student, Environmental Engineering, 2023.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🔬</div><div><div class="achievement-title">MIT PhD — No Corrections</div><div class="achievement-desc">Awarded without corrections. Top 3% of MIT CEE graduates.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🌊</div><div><div class="achievement-title">African Lakes Monitoring System</div><div class="achievement-desc">Her AI model deployed across 6 East African lake ecosystems.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">📜</div><div><div class="achievement-title">Nature Climate Change Publication</div><div class="achievement-desc">Co-lead author, 2025 paper on ML for freshwater crisis prediction.</div></div></div>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Three</span><div class="chapter-line"></div><h2>Building the System Africa Needs</h2></div>
      <p>Now a Postdoctoral Research Fellow at MIT's Media Lab, Aisha leads the African Environmental Intelligence project — a collaboration between MIT, the African Union, and the Kenya Meteorological Department to deploy low-cost sensor networks across twelve East African freshwater ecosystems.</p>
      <p>Her co-authored paper in <em>Nature Climate Change</em> on machine learning for freshwater crisis prediction was cited over 800 times in its first eighteen months. <strong>She is currently negotiating a research partnership with the European Space Agency to integrate Sentinel satellite imagery into the prediction model.</strong></p>
      <div class="nova-connection">
        <div class="heading">🏫 Her Nova Heights Chapter</div>
        <p>Aisha has said that the single most important academic intervention in her life was Mrs. Achieng teaching her how to formulate a research question with rigour. "I had observations and feelings about Lake Naivasha. She taught me to convert them into hypotheses, then into data, then into conclusions that could be tested. That is the entire arc of my career, in one lesson."</p>
      </div>
    `,
    timeline: [
      {
        year: "2013",
        icon: "🏫",
        title: "Joins Nova Heights",
        desc: "Arrives with a notebook of Lake Naivasha observations already four years in the making.",
      },
      {
        year: "2019",
        icon: "🌍",
        title: "IYSF 3rd Place Globally",
        desc: "Extended Essay on Lake Naivasha microclimatic change recognised internationally.",
      },
      {
        year: "2023",
        icon: "🎓",
        title: "Imperial First Class + President's Medal",
        desc: "Top environmental engineering graduate. Full MIT scholarship awarded.",
      },
      {
        year: "2025",
        icon: "🔬",
        title: "MIT Postdoc + Nature Publication",
        desc: "African Lakes AI system live. 800+ citations in first 18 months.",
      },
    ],
  },

  {
    id: "obinna-ejike",
    name: "Obinna Ejike",
    class: "Class of 2016",
    tagline:
      "Lead Data Scientist, Safaricom · Designing AI systems that make M-Pesa smarter for 37 million users.",
    industry: "Technology",
    industryColor: "#4CC9F0",
    chips: [
      "🤖 AI & Machine Learning",
      "📊 MSc, University of Toronto",
      "📱 Safaricom M-Pesa",
    ],
    imgCard: "images/optimized/alumni-success.jpg",
    imgFull: "images/optimized/alumni-success.jpg",
    story: `
      <div class="chapter"><span class="chapter-num">Chapter One</span><div class="chapter-line"></div><h2>The Student Who Asked Why</h2></div>
      <p>If there was one quality every teacher remembered about Obinna Ejike, it was this: he never accepted an answer at face value. In Mathematics, he would solve the problem set, then invent harder problems and solve those too. In Physics, he would complete the experiment, then redesign it with different variables and run it again. His Chemistry teacher called him "the most productively annoying student I've ever taught — in the best possible way."</p>
      <p><strong>In Form Five, he built a basic predictive model for the school's water consumption using two years of utility bills and weather data — reducing wastage by 18% after the school implemented his recommendations.</strong></p>
      <div class="pull-quote">
        <blockquote>"Data science is just applied curiosity. If you can stay genuinely curious about a problem — not performatively curious, genuinely curious — the mathematics takes care of itself."</blockquote>
        <span class="quote-attr">— Obinna Ejike, Class of 2016</span>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Two</span><div class="chapter-line"></div><h2>Toronto and the Art of Inference</h2></div>
      <p>Obinna read Statistics and Computer Science at the University of Nairobi before winning a competitive scholarship for the MSc in Artificial Intelligence at the University of Toronto. Under the supervision of Professor Geoffrey Hinton's former PhD student, he developed a novel approach to anomaly detection in high-volume transaction data that reduced false-positive fraud alerts by 34% compared to existing industry benchmarks.</p>
      <p>His MSc thesis was awarded the department's prize for applied machine learning and led directly to a job offer from Safaricom's newly-formed Data Intelligence unit. He joined as a Senior Data Scientist in 2021 and was promoted to Lead Data Scientist within eighteen months.</p>
      <div class="achievements-grid">
        <div class="achievement-card"><div class="achievement-icon">🤖</div><div><div class="achievement-title">Lead Data Scientist, Safaricom</div><div class="achievement-desc">Heads M-Pesa AI fraud detection and personalisation systems.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🏆</div><div><div class="achievement-title">University of Toronto MSc Prize</div><div class="achievement-desc">Best Applied ML Thesis, 2021. 34% improvement on fraud detection.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">📱</div><div><div class="achievement-title">37M Users Impacted</div><div class="achievement-desc">His AI models serve every active M-Pesa account in Kenya.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">📖</div><div><div class="achievement-title">NeurIPS 2024 Paper</div><div class="achievement-desc">Co-authored paper on financial inclusion ML models at NeurIPS conference.</div></div></div>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Three</span><div class="chapter-line"></div><h2>Teaching 37 Million People to Trust Their Phone</h2></div>
      <p>At Safaricom, Obinna leads the team responsible for M-Pesa's AI-driven fraud detection, transaction personalisation, and credit risk modelling. His models run on every M-Pesa transaction — roughly 400 times per second, around the clock, across Kenya's 37 million M-Pesa users.</p>
      <p>His most recent project is a <strong>real-time income verification system</strong> that allows small business owners to access emergency credit within 90 seconds of application — using only their M-Pesa transaction history. In pilot testing across Nairobi and Mombasa, the system has extended credit to over 180,000 customers who were previously unscored. <strong>He presented the underlying methodology at NeurIPS 2024 in Vancouver.</strong></p>
      <div class="nova-connection">
        <div class="heading">🏫 His Nova Heights Chapter</div>
        <p>Obinna returned to Nova Heights in 2024 to officially open the school's new Computer Science lab — funded in part by a donation he organised through Safaricom's alumni engagement programme. "This room is the reason I do what I do," he told the assembled students. "The question I asked about the school's water bill in Form Five led directly here. Your next question might lead somewhere I can't even imagine."</p>
      </div>
    `,
    timeline: [
      {
        year: "2010",
        icon: "🏫",
        title: "Joins Nova Heights",
        desc: "Immediately distinguishes himself by going beyond every syllabus.",
      },
      {
        year: "2016",
        icon: "📊",
        title: "BSc Statistics & CS, University of Nairobi",
        desc: "Wins Dean's Prize for Mathematics in final year.",
      },
      {
        year: "2021",
        icon: "🎓",
        title: "MSc AI, University of Toronto",
        desc: "MSc Prize. Joins Safaricom Data Intelligence as Senior Data Scientist.",
      },
      {
        year: "2024",
        icon: "🤖",
        title: "NeurIPS 2024 · Lead Data Scientist",
        desc: "Paper on financial inclusion ML. Promoted to Lead Data Scientist.",
      },
    ],
  },

  {
    id: "naledi-dlamini",
    name: "Naledi Dlamini",
    class: "Class of 2021",
    tagline:
      "Medical Officer, Médecins Sans Frontières Kenya · Humanitarian Medicine Award 2025.",
    industry: "Medicine",
    industryColor: "#06D6A0",
    chips: [
      "🩺 MSF Kenya",
      "🌍 MBBS, Aga Khan University",
      "🏅 Humanitarian Award 2025",
    ],
    imgCard: "images/optimized/alumni-event.jpg",
    imgFull: "images/optimized/alumni-event.jpg",
    story: `
      <div class="chapter"><span class="chapter-num">Chapter One</span><div class="chapter-line"></div><h2>The Girl Who Wanted to Go Where It Was Hardest</h2></div>
      <p>Naledi Dlamini grew up in a family of nurses. Her mother worked the night shift at Pumwani Maternity Hospital for twenty-two years. Her aunt was a community health worker in Kibera. From early childhood, medicine wasn't an aspiration for Naledi — it was the grammar of her home. But while her mother and aunt worked within the system, Naledi always wanted to go further. Into the places where the system wasn't.</p>
      <p>At Nova Heights, she was that quiet student who was easy to underestimate until she opened her mouth. <strong>In Form Three, she organised a blood drive that collected 180 units in a single day — the largest ever student-organised donation at the school.</strong> In Form Five, she spent her long holiday volunteering at a refugee camp clinic in Kakuma, returning with a notebook of clinical observations and a permanently altered perspective on what "access to healthcare" actually means.</p>
      <div class="pull-quote">
        <blockquote>"There are places in this world where the most revolutionary thing a doctor can do is simply show up. I want to be in those places. I choose to be in those places."</blockquote>
        <span class="quote-attr">— Naledi Dlamini, Class of 2021</span>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Two</span><div class="chapter-line"></div><h2>Aga Khan and the Education of a Humanitarian Physician</h2></div>
      <p>Naledi was admitted to Aga Khan University's Medical College in Nairobi — one of the most competitive medical programmes in East Africa. She graduated in 2025 with an MBBS and a distinction in Emergency Medicine, having spent her elective rotations in underserved clinics in North Eastern Kenya and in Juba, South Sudan.</p>
      <p>Before she had even completed her internship, MSF Kenya offered her a position. Two of her supervisors during clinical rotations were former MSF volunteers who wrote letters of recommendation describing her as <em>"the rarest kind of doctor: technically excellent and constitutionally fearless."</em></p>
      <div class="achievements-grid">
        <div class="achievement-card"><div class="achievement-icon">🌍</div><div><div class="achievement-title">MSF Kenya Medical Officer</div><div class="achievement-desc">Deployed to Mandera, Turkana, and Dadaab refugee camp complex.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🏅</div><div><div class="achievement-title">Humanitarian Medicine Award 2025</div><div class="achievement-desc">Kenya Medical Association award for outstanding humanitarian service.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">👶</div><div><div class="achievement-title">3,200+ Patients Treated</div><div class="achievement-desc">In 14 months of MSF field deployments across Northern Kenya.</div></div></div>
        <div class="achievement-card"><div class="achievement-icon">🎓</div><div><div class="achievement-title">MBBS with Distinction</div><div class="achievement-desc">Aga Khan University, 2025. First in Emergency Medicine cohort.</div></div></div>
      </div>
      <div class="chapter"><span class="chapter-num">Chapter Three</span><div class="chapter-line"></div><h2>The Places the System Wasn't</h2></div>
      <p>In fourteen months with MSF, Naledi has been deployed to three field sites: Mandera County, the Turkana pastoral communities, and the Dadaab refugee camp complex — one of the largest refugee settlements in the world. She has treated over 3,200 patients, managed two cholera outbreaks, and conducted emergency obstetric procedures in settings where the nearest surgical theatre was a four-hour drive away.</p>
      <p>In 2025, the Kenya Medical Association awarded her its Humanitarian Medicine Award. <strong>She is the youngest recipient in the award's history.</strong> When she returned to Nairobi to receive it, she asked if she could bring a patient from Dadaab to the ceremony. They said yes. She did.</p>
      <div class="nova-connection">
        <div class="heading">🏫 Her Nova Heights Chapter</div>
        <p>Naledi has said that the blood drive she organised in Form Three — when four teachers and twelve students stayed until 10pm to ensure the targets were met — was the moment she understood what institutional commitment actually feels like. "Nova Heights taught me that if you care enough to stay past 5pm, you can make extraordinary things happen. I've never forgotten that. It works in every country."</p>
      </div>
    `,
    timeline: [
      {
        year: "2015",
        icon: "🏫",
        title: "Joins Nova Heights",
        desc: "Organises largest student blood drive in school history, Form Three.",
      },
      {
        year: "2019",
        icon: "🌍",
        title: "Kakuma Volunteer",
        desc: "Long holiday at Kakuma refugee camp clinic. A defining experience.",
      },
      {
        year: "2025",
        icon: "🎓",
        title: "MBBS with Distinction, Aga Khan",
        desc: "First in Emergency Medicine. MSF Kenya offer before internship ends.",
      },
      {
        year: "2025",
        icon: "🏅",
        title: "Humanitarian Medicine Award",
        desc: "Youngest-ever recipient. 3,200+ patients treated in MSF deployments.",
      },
    ],
  },
];

/* ═══════════════════════════════════════════════
   STATE
═══════════════════════════════════════════════ */
let currentAlumniId = null;
let visibleIds = ALUMNI.map((a) => a.id);

/* ═══════════════════════════════════════════════
   FILTER CHIPS
═══════════════════════════════════════════════ */
const chips = document.querySelectorAll(".chip");
const cards = document.querySelectorAll(".alumni-card");
const resultsNum = document.getElementById("results-num");

chips.forEach((chip) => {
  chip.addEventListener("click", () => {
    chips.forEach((c) => c.classList.remove("active"));
    chip.classList.add("active");
    const filter = chip.dataset.filter;

    let count = 0;
    visibleIds = [];
    cards.forEach((card) => {
      const industry = card.dataset.industry;
      const show = filter === "All" || industry === filter;
      if (show) {
        card.classList.remove("hidden");
        card.style.animationName = "none";
        requestAnimationFrame(() => {
          card.style.animationName = "cardIn";
          card.style.animationDuration = "0.5s";
        });
        count++;
        visibleIds.push(card.dataset.id);
      } else {
        card.classList.add("hidden");
      }
    });
    if (resultsNum) resultsNum.textContent = count;

    const grid = document.getElementById("alumni-grid");
    if (grid) {
      const existing = grid.querySelector(".empty-state");
      if (existing) existing.remove();
      if (count === 0) {
        const empty = document.createElement("div");
        empty.className = "empty-state";
        empty.innerHTML = `<h3>No alumni in this category yet</h3><p>Check back soon — this roster is always growing.</p>`;
        grid.appendChild(empty);
      }
    }
  });
});

/* ═══════════════════════════════════════════════
   VIEW TOGGLE (grid / list)
═══════════════════════════════════════════════ */
const gridViewBtn = document.getElementById("grid-view-btn");
const listViewBtn = document.getElementById("list-view-btn");
const alumniGrid = document.getElementById("alumni-grid");

if (gridViewBtn && listViewBtn && alumniGrid) {
  gridViewBtn.addEventListener("click", () => {
    alumniGrid.classList.remove("list-view");
    gridViewBtn.classList.add("active");
    listViewBtn.classList.remove("active");
  });
  listViewBtn.addEventListener("click", () => {
    alumniGrid.classList.add("list-view");
    listViewBtn.classList.add("active");
    gridViewBtn.classList.remove("active");
  });
}

/* ═══════════════════════════════════════════════
   PROFILE MODAL
═══════════════════════════════════════════════ */
const overlay = document.getElementById("profile-overlay");
const profileContent = document.getElementById("profile-content");
const profilePrev = document.getElementById("profile-prev");
const profileNext = document.getElementById("profile-next");
const profileNavLabel = document.getElementById("profile-nav-label");

function getIndustryStyle(industry, color) {
  return `color:${color};border-color:${color}30;`;
}

function renderProfile(id) {
  const alumni = ALUMNI.find((a) => a.id === id);
  if (!alumni) return;
  currentAlumniId = id;

  const idx = visibleIds.indexOf(id);
  const total = visibleIds.length;
  if (profileNavLabel) profileNavLabel.textContent = `${idx + 1} / ${total}`;
  if (profilePrev) profilePrev.disabled = idx === 0;
  if (profileNext) profileNext.disabled = idx === total - 1;

  const timelineHTML = alumni.timeline
    ? `
    <div class="chapter"><span class="chapter-num">Timeline</span><div class="chapter-line"></div><h2>Key Milestones</h2></div>
    <div class="timeline">
      ${alumni.timeline
        .map(
          (t) => `
        <div class="timeline-item">
          <div class="timeline-dot">${t.icon}</div>
          <div class="timeline-content">
            <div class="timeline-year">${t.year}</div>
            <div class="timeline-title">${t.title}</div>
            <div class="timeline-desc">${t.desc}</div>
          </div>
        </div>
      `,
        )
        .join("")}
    </div>
  `
    : "";

  if (profileContent) {
    profileContent.innerHTML = `
      <div class="profile-header">
        <div class="profile-header-bg"></div>
        <div class="profile-header-grid">
          <div class="profile-portrait">
            <img src="${alumni.imgFull}" alt="${alumni.name}" onerror="this.src='${alumni.imgCard}'" />
            <div class="profile-portrait-overlay"></div>
          </div>
          <div class="profile-header-content">
            <div class="profile-industry-tag" style="${getIndustryStyle(alumni.industry, alumni.industryColor)}">
              ${alumni.industry}
            </div>
            <h1 class="profile-name">${alumni.name}</h1>
            <p class="profile-tagline">${alumni.tagline}</p>
            <div class="profile-meta-chips">
              <span class="meta-chip"><span class="icon">📅</span>${alumni.class}</span>
              ${alumni.chips.map((c) => `<span class="meta-chip">${c}</span>`).join("")}
            </div>
          </div>
        </div>
      </div>
      <div class="profile-body">
        ${alumni.story}
        ${timelineHTML}
      </div>
    `;
  }

  const panel = document.getElementById("profile-panel");
  if (panel) panel.scrollTop = 0;
}

function openProfile(id) {
  if (!visibleIds.includes(id)) {
    const found = ALUMNI.find((a) => a.id === id);
    if (!found) return;
    visibleIds = ALUMNI.map((a) => a.id);
  }
  renderProfile(id);
  if (overlay) {
    overlay.classList.add("open");
    document.body.style.overflow = "hidden";
  }
}

function closeProfile() {
  if (overlay) overlay.classList.remove("open");
  document.body.style.overflow = "";
}

document.querySelectorAll(".alumni-card").forEach((card) => {
  card.addEventListener("click", () => openProfile(card.dataset.id));
});

document.querySelectorAll(".story-card").forEach((card) => {
  card.addEventListener("click", () => {
    const id = card.dataset.id;
    if (id) {
      if (!visibleIds.includes(id)) visibleIds = ALUMNI.map((a) => a.id);
      openProfile(id);
    }
  });
});

const profileCloseBtn = document.getElementById("profile-close");
if (profileCloseBtn) profileCloseBtn.addEventListener("click", closeProfile);
if (overlay)
  overlay.addEventListener("click", (e) => {
    if (e.target === overlay) closeProfile();
  });
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") closeProfile();
});

if (profilePrev) {
  profilePrev.addEventListener("click", () => {
    const idx = visibleIds.indexOf(currentAlumniId);
    if (idx > 0) renderProfile(visibleIds[idx - 1]);
  });
}
if (profileNext) {
  profileNext.addEventListener("click", () => {
    const idx = visibleIds.indexOf(currentAlumniId);
    if (idx < visibleIds.length - 1) renderProfile(visibleIds[idx + 1]);
  });
}

document.addEventListener("keydown", (e) => {
  if (!overlay || !overlay.classList.contains("open")) return;
  if (e.key === "ArrowRight" || e.key === "ArrowDown") {
    if (profileNext) profileNext.click();
  }
  if (e.key === "ArrowLeft" || e.key === "ArrowUp") {
    if (profilePrev) profilePrev.click();
  }
});

/* ═══════════════════════════════════════════════
   URL HASH — deep link support
═══════════════════════════════════════════════ */
function checkHash() {
  const hash = window.location.hash.slice(1);
  if (hash && ALUMNI.find((a) => a.id === hash)) {
    setTimeout(() => openProfile(hash), 400);
  }
}
window.addEventListener("hashchange", checkHash);
checkHash();

/* navbar scroll handled by main.js */

/* ═══════════════════════════════════════════════
   SCROLL TO TOP
═══════════════════════════════════════════════ */
const scrollTopBtn = document.getElementById("scroll-top");
if (scrollTopBtn) {
  window.addEventListener(
    "scroll",
    () => {
      scrollTopBtn.classList.toggle("visible", window.scrollY > 500);
    },
    { passive: true },
  );
  scrollTopBtn.addEventListener("click", () =>
    window.scrollTo({ top: 0, behavior: "smooth" }),
  );
}

/* ═══════════════════════════════════════════════
   INTERSECTION OBSERVER — card entrance
═══════════════════════════════════════════════ */
const cardObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.style.opacity = "1";
        e.target.style.transform = "none";
      }
    });
  },
  { threshold: 0.1 },
);

document
  .querySelectorAll(".alumni-card, .story-card")
  .forEach((el) => cardObserver.observe(el));

/* ═══════════════════════════════════════════════
   AJAX FORM — alumni network registration
═══════════════════════════════════════════════ */
document.querySelectorAll("form[data-ajax]").forEach((form) => {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const btn = form.querySelector("[type=submit]");
    const success = form.querySelector(".form-success");
    if (btn) {
      btn.textContent = "Sending...";
      btn.disabled = true;
    }
    setTimeout(() => {
      if (success) success.style.display = "block";
      if (btn) btn.textContent = "Registered!";
      form.querySelectorAll("input").forEach((el) => (el.value = ""));
      setTimeout(() => {
        if (success) success.style.display = "none";
        if (btn) {
          btn.textContent = "Join the Alumni Network";
          btn.disabled = false;
        }
      }, 4000);
    }, 1200);
  });
});
