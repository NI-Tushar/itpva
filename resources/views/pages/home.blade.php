@extends('layouts.app')

@section('title', 'ITPVA - High-Trust Verified Accounts & Cloud Infrastructure')

@section('app-content')
    @php
        $filters = [
            ['key' => 'all', 'label' => 'All Infrastructure', 'icon' => 'fa-solid fa-server'],
            ['key' => 'email', 'label' => 'Email & Workspace', 'icon' => 'fa-solid fa-envelope'],
            ['key' => 'voice', 'label' => 'Google Voice & VOIP', 'icon' => 'fa-solid fa-phone'],
            ['key' => 'social', 'label' => 'Social Media', 'icon' => 'fa-solid fa-share-nodes'],
            ['key' => 'cloud', 'label' => 'Cloud & DevOps', 'icon' => 'fa-solid fa-cloud'],
            ['key' => 'more', 'label' => 'More Utilities', 'icon' => 'fa-solid fa-cubes'],
        ];

        $products = [
            [
                'title' => 'Gmail (Fresh PVA)',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'Instant PVA',
                'route' => route('email.gmail'),
                'image' => asset('images/products/gmail.png'),
                'description' => 'Real-carrier phone-verified Gmail accounts prepared with fresh residential IP registration, 2FA recovery, and IMAP/POP3 compatibility.',
                'specs' => ['Non-VoIP Phone Verified', 'Recovery Email Attached', 'POP3/IMAP Activated', 'Instant Delivery'],
                'in_stock' => true,
            ],
            [
                'title' => 'Buy Gmail Accounts',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'High Volume',
                'route' => route('email.buy-gmail-accounts'),
                'image' => asset('images/products/gmail.png'),
                'description' => 'Scalable batches of verified Gmail accounts tailored for outreach teams, marketing automations, and multi-profile setups.',
                'specs' => ['Tiered Bulk Pricing', 'Clean Residential IPs', 'Organized CSV/JSON Export', 'Replacement Warranty'],
                'in_stock' => true,
            ],
            [
                'title' => 'Buy Gmail Aged Accounts',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'Aged 2014-2023',
                'route' => route('email.buy-gmail-aged-accounts'),
                'image' => asset('images/products/aged-gmail.png'),
                'description' => 'Seasoned Gmail accounts with established inbox longevity, organic trust metrics, and minimal friction for high-deliverability operations.',
                'specs' => ['Multi-Year Age History', 'High Sender Authority', 'Warm Inbox Activity', 'Premium Security Footprint'],
                'in_stock' => true,
            ],
            [
                'title' => 'Google Voice Accounts',
                'category' => 'voice',
                'category_label' => 'Google Voice & VOIP',
                'badge' => 'Real US Carrier',
                'route' => route('google-voice.buy-google-voice-accounts'),
                'image' => asset('images/products/voice.png'),
                'description' => 'Clean Google Voice numbers verified through genuine US telecommunication carriers. Full call, SMS, and two-way verification capabilities.',
                'specs' => ['US Real Phone Carrier', 'SMS & Voice Ready', 'Full Gmail Credentials', 'Rapid Fulfillment'],
                'in_stock' => true,
            ],
            [
                'title' => 'AGED Google Voice',
                'category' => 'voice',
                'category_label' => 'Google Voice & VOIP',
                'badge' => 'Seasoned Voice',
                'route' => route('google-voice.aged-google-voice'),
                'image' => asset('images/products/aged-voice.png'),
                'description' => 'Mature Google Voice accounts with historical call logs and established carrier trust, built for reliable long-term communications.',
                'specs' => ['Seasoned Activity Profile', 'Persistent Carrier Link', 'High Retention Rate', 'Dedicated US Area Codes'],
                'in_stock' => true,
            ],
            [
                'title' => 'Yahoo Accounts',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'PVA Verified',
                'route' => route('yahoo'),
                'image' => asset('images/products/yeahoo.png'),
                'description' => 'Phone-verified Yahoo Mail accounts ready for marketing newsletters, multi-platform signups, and automated notification processing.',
                'specs' => ['Active Mobile Verification', 'IMAP/POP3 Protocol Access', 'Organized Credential List', 'Instant Queue Delivery'],
                'in_stock' => true,
            ],
            [
                'title' => 'Facebook Accounts',
                'category' => 'social',
                'category_label' => 'Social Media',
                'badge' => 'Aged Profiles',
                'route' => route('social-media.facebook-accounts'),
                'image' => asset('images/products/facebook.png'),
                'description' => 'Seasoned Facebook profiles with natural friends network, organic engagement logs, and Ads Manager warm-up compatibility.',
                'specs' => ['2FA Security Code Key', 'Aged Profile History', 'Cookies (JSON) Included', 'Clean Residential IP'],
                'in_stock' => true,
            ],
            [
                'title' => 'Instagram Accounts',
                'category' => 'social',
                'category_label' => 'Social Media',
                'badge' => 'Creator & Niche',
                'route' => route('social-media.instagram-accounts'),
                'image' => asset('images/products/instagram.png'),
                'description' => 'PVA Instagram profiles crafted with clean profile bios, original email access, and organic post histories across popular niches.',
                'specs' => ['Original Email Access', 'Phone Verified (PVA)', 'Niche Pre-Warmed', 'Full Recovery Credentials'],
                'in_stock' => true,
            ],
            [
                'title' => 'Twitter / X Accounts',
                'category' => 'social',
                'category_label' => 'Social Media',
                'badge' => 'Automation Ready',
                'route' => route('social-media.twitter-accounts'),
                'image' => asset('images/products/twitter.png'),
                'description' => 'Verified Twitter/X assets suitable for Web3 communities, developer API integrations, social growth bots, and influencer brands.',
                'specs' => ['Email & Phone Verified', 'Auth Token & Cookies', 'Aged Creation Timestamp', 'Shadowban-Free History'],
                'in_stock' => true,
            ],
            [
                'title' => 'YouTube Accounts',
                'category' => 'social',
                'category_label' => 'Social Media',
                'badge' => 'Channel PVA',
                'route' => route('social-media.youtube-accounts'),
                'image' => asset('images/products/youtube.png'),
                'description' => 'Phone-verified YouTube channels equipped for video uploads, livestream activations, and long-term content creation pipelines.',
                'specs' => ['Channel Verification Pass', 'Livestream Feature Enabled', 'Custom Thumbnail Ready', 'Full Gmail Access'],
                'in_stock' => true,
            ],
            [
                'title' => 'LinkedIn Accounts',
                'category' => 'more',
                'category_label' => 'More Utilities',
                'badge' => 'Sales Navigator',
                'route' => route('more.linked-in'),
                'image' => asset('images/products/linkedin.png'),
                'description' => 'Seasoned LinkedIn profiles with complete educational and professional credentials, suited for B2B prospecting and recruitment workflows.',
                'specs' => ['Complete Professional Bio', 'Real Connections Network', 'Sales Prospecting Ready', 'Zero Restriction Record'],
                'in_stock' => true,
            ],
            [
                'title' => 'Hotmail / Outlook',
                'category' => 'more',
                'category_label' => 'More Utilities',
                'badge' => 'Microsoft PVA',
                'route' => route('more.hotmail'),
                'image' => asset('images/products/hotmail.png'),
                'description' => 'High-capacity Microsoft Outlook and Hotmail mailboxes pre-configured for enterprise mailing tools and bulk outreach systems.',
                'specs' => ['Phone Verified (PVA)', 'Active SMTP/POP3 Protocol', 'Bulk CSV Download', 'Instant Node Dispatch'],
                'in_stock' => true,
            ],
            [
                'title' => 'Reddit Accounts',
                'category' => 'more',
                'category_label' => 'More Utilities',
                'badge' => 'Karma Seasoned',
                'route' => route('more.raddit'),
                'image' => asset('images/products/raddit.png'),
                'description' => 'Aged Reddit accounts with established post and comment karma, granting immediate posting permissions in high-threshold subreddits.',
                'specs' => ['Post & Comment Karma', 'Aged Profile Horizon', 'Unrestricted Posting Access', 'Original Email Included'],
                'in_stock' => true,
            ],
            [
                'title' => 'TextNow Accounts',
                'category' => 'more',
                'category_label' => 'More Utilities',
                'badge' => 'SMS / Call Line',
                'route' => route('more.textnow'),
                'image' => asset('images/products/textnow.jpg'),
                'description' => 'Active US calling and texting lines for quick mobile verification steps, temporary communications, and developer sandbox tests.',
                'specs' => ['Active US Phone Number', 'Direct SMS Receiving', 'Clean Session Storage', 'Fast Turnaround'],
                'in_stock' => true,
            ],
            [
                'title' => 'DigitalOcean Accounts',
                'category' => 'cloud',
                'category_label' => 'Cloud & DevOps',
                'badge' => '$200 Credits',
                'route' => route('more.digital-ocean'),
                'image' => asset('images/products/digitalocean.png'),
                'description' => 'Fully verified DigitalOcean cloud developer accounts with approved billing thresholds, multi-droplet deployment quota, and clean history.',
                'specs' => ['Billing & Card Verified', '3-10 Droplet Limit Open', 'Port 25 Check Available', 'Full Email Account Access'],
                'in_stock' => true,
            ],
            [
                'title' => 'Google Cloud (GCP)',
                'category' => 'cloud',
                'category_label' => 'Cloud & DevOps',
                'badge' => '$300 Free Trial',
                'route' => route('more.google-cloud'),
                'image' => asset('images/products/google-cloud.png'),
                'description' => 'Pre-activated Google Cloud Platform consoles featuring $300 credit trials for Compute Engine, Kubernetes, AI APIs, and web hosting.',
                'specs' => ['$300 Free Trial Active', 'Compute Engine Unlocked', 'Identity Verification Cleared', 'Full Root Workspace'],
                'in_stock' => true,
            ],
            [
                'title' => 'Amazon Web Services (AWS)',
                'category' => 'cloud',
                'category_label' => 'Cloud & DevOps',
                'badge' => 'EC2 / SES Quota',
                'route' => route('more.amazon-web-services'),
                'image' => asset('images/products/aws.png'),
                'description' => 'Verified AWS console instances with standard 8 to 32 vCPU quotas, active billing verification, and root identity credentials.',
                'specs' => ['Card & Identity Cleared', 'EC2 Instance Quotas Open', 'Global Region Access', 'Fresh Dedicated Root'],
                'in_stock' => true,
            ],
            [
                'title' => 'Microsoft Azure',
                'category' => 'cloud',
                'category_label' => 'Cloud & DevOps',
                'badge' => 'Azure $200 Tier',
                'route' => route('more.azure-account'),
                'image' => asset('images/products/azure.png'),
                'description' => 'Microsoft Azure developer subscriptions configured with initial trial credits for VM deployment, App Services, and cloud databases.',
                'specs' => ['Active Subscription Status', 'Global Datacenter Deploy', 'Clean Payment Attachment', 'Direct Portal Login'],
                'in_stock' => true,
            ],
            [
                'title' => 'AOL Accounts',
                'category' => 'more',
                'category_label' => 'More Utilities',
                'badge' => 'Niche Email',
                'route' => route('more.aol-account'),
                'image' => asset('images/products/aol.png'),
                'description' => 'Verified AOL Mail credentials ideal for multi-channel newsletters, specialized affiliate operations, and registration fallbacks.',
                'specs' => ['Phone Verified PVA', 'SMTP / POP3 Enabled', 'Clean Residential Creation', 'Immediate Batch Delivery'],
                'in_stock' => true,
            ],
            [
                'title' => 'Domain Google Voice',
                'category' => 'more',
                'category_label' => 'More Utilities',
                'badge' => 'Enterprise VOIP',
                'route' => route('more.domain-gv'),
                'image' => asset('images/products/domain-gv.png'),
                'description' => 'Custom domain-linked Google Voice packages designed for corporate identity, professional sales desks, and branded call routing.',
                'specs' => ['Custom Domain Linked', 'Professional Voice Line', 'Enterprise Workspace Tier', 'Transfer Guidance Included'],
                'in_stock' => true,
            ],
            [
                'title' => 'Product Hunt Accounts',
                'category' => 'more',
                'category_label' => 'More Utilities',
                'badge' => 'Launch Ready',
                'route' => route('more.product-hunt'),
                'image' => asset('images/products/producthunt.png'),
                'description' => 'Aged Product Hunt profiles with natural maker interactions, upvote history, and community trust for high-impact product launches.',
                'specs' => ['Aged Reviewer Identity', 'Upvote & Comment Ready', 'Maker Community Rank', 'Original Credentials'],
                'in_stock' => true,
            ],
            [
                'title' => 'Nextdoor Accounts',
                'category' => 'more',
                'category_label' => 'More Utilities',
                'badge' => 'Local PVA',
                'route' => route('more.nextdoor'),
                'image' => asset('images/products/nextdoor.png'),
                'description' => 'Aged and fresh US/UK Nextdoor accounts verified with residential addresses for local contractor, real estate, and service outreach.',
                'specs' => ['US/UK Postal Verified', 'Aged & Fresh Tiers', 'High Local Trust', '48h Replacement Guarantee'],
                'in_stock' => true,
            ],
            [
                'title' => 'Edu Mail Accounts',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'Student Perks',
                'route' => route('email.edumail'),
                'image' => asset('images/products/edumail.png'),
                'description' => 'Authentic student .EDU inboxes for GitHub Student Pack, JetBrains, Canva Pro, Spotify 50% discount, and Amazon Prime.',
                'specs' => ['Official .EDU College Mail', 'GitHub Developer Pack Ready', 'Webmail / O365 Access', 'Lifetime Perks Unlocked'],
                'in_stock' => true,
            ],
            [
                'title' => 'Old Code Mail Accounts',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'OTP Recovery',
                'route' => route('email.code-mail'),
                'image' => asset('images/products/review_mail.png'),
                'description' => 'Aged recovery inboxes engineered to instantly capture verification OTPs, password reset links, and 2FA triggers without delays.',
                'specs' => ['Sub-3s OTP Reception', 'Aged 6-36 Months', 'IMAP/POP3 Protocol Active', 'Spam Filtering Bypassed'],
                'in_stock' => true,
            ],
            [
                'title' => 'GMX Mail Accounts',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'POP3/IMAP Active',
                'route' => route('email.gmx'),
                'image' => asset('images/products/gmx.png'),
                'description' => 'Reliable European & global GMX.com email accounts with full POP3, IMAP, and SMTP enabled for automated mail clients and scripts.',
                'specs' => ['POP3/IMAP/SMTP Enabled', '65GB Cloud Storage', 'Zero Phone Lockouts', 'High Mail Deliverability'],
                'in_stock' => true,
            ],
            [
                'title' => 'Mail.com Accounts',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'Fresh & 1M+ Aged',
                'route' => route('email.mail-com'),
                'image' => asset('images/products/mailcom.png'),
                'description' => 'Premium Mail.com inboxes available in fresh or 1+ month aged tiers with native IMAP/POP/SMTP support for marketing sequences.',
                'specs' => ['1M+ Aged & Fresh Options', 'Native IMAP/SMTP Protocols', 'Professional Domains', '65GB Mail Storage'],
                'in_stock' => true,
            ],
            [
                'title' => 'Hotmail & Outlook OAuth2',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => 'OAuth2 Graph / IMAP',
                'route' => route('email.hotmail-oauth2'),
                'image' => asset('images/products/outlook.png'),
                'description' => 'Aged 12-36 months Hotmail & Outlook accounts equipped with modern OAuth2 Microsoft Graph/IMAP tokens, phone binding, and recovery mail.',
                'specs' => ['12-36 Months Live Age', 'OAuth2 Graph & IMAP Tokens', 'Phone & Recovery Attached', 'Industrial Mailer Ready'],
                'in_stock' => true,
            ],
            [
                'title' => 'Gmail Domain For Rent',
                'category' => 'email',
                'category_label' => 'Email & Workspace',
                'badge' => '2h to 48h Flexible',
                'route' => route('email.gmail-domain-rent'),
                'image' => asset('images/products/gmail-domain-rent.png'),
                'description' => 'On-demand short and extended rental of verified Gmail domain inboxes for single-use OTPs, app verification, and 2FA reception.',
                'specs' => ['Instant 60s Activation', 'Rental Windows 2h - 48h+', '100% Private Slot', 'Webmail / Webhook Sync'],
                'in_stock' => true,
            ],
            [
                'title' => 'TikTok Ads Accounts',
                'category' => 'social',
                'category_label' => 'Social Media',
                'badge' => 'Postpaid USD/VND',
                'route' => route('social-media.tiktok-accounts'),
                'image' => asset('images/products/tik-tok.png'),
                'description' => 'Postpaid and agency TikTok Ads Manager accounts with 2FA protection, USD/VND currency, and unrestricted global ad targeting.',
                'specs' => ['Postpaid Billing Active', 'USD & VND Currencies', '2FA Authenticator Armed', 'Worldwide Ad Targeting'],
                'in_stock' => true,
            ],
            [
                'title' => 'Instagram Clone & Aged PVA',
                'category' => 'social',
                'category_label' => 'Social Media',
                'badge' => '1-30 Days PVA 2FA',
                'route' => route('social-media.instagram-clone'),
                'image' => asset('images/products/instagram-clone.png'),
                'description' => 'Matured 1-30 days Instagram PVA accounts and realistic clone profiles with 2FA secret keys, phone verification, and pre-warmed trust.',
                'specs' => ['1-30 Days Aged Profiles', '2FA Secret Keys Included', 'Realistic Clone Styling', 'Dual Phone + Email PVA'],
                'in_stock' => true,
            ],
        ];

        $stats = [
            ['value' => '120K+', 'label' => 'Accounts Provisioned', 'sub' => 'Across global tech stacks', 'icon' => 'fa-solid fa-server'],
            ['value' => '99.8%', 'label' => 'Verification Success', 'sub' => 'Clean residential IPs', 'icon' => 'fa-solid fa-shield-halved'],
            ['value' => '< 5 Min', 'label' => 'Average Dispatch', 'sub' => 'Automated queue system', 'icon' => 'fa-solid fa-bolt'],
            ['value' => '24/7', 'label' => 'Technical Support', 'sub' => 'Live WhatsApp & Telegram', 'icon' => 'fa-solid fa-headset'],
        ];

        $pillars = [
            [
                'icon' => 'fa-solid fa-sim-card',
                'title' => '100% Real Carrier Non-VoIP PVA',
                'desc' => 'Every phone-verified asset utilizes genuine physical SIM card numbers from Tier-1 telecommunications carriers. We never use recycled virtual numbers that trip security checks.',
                'tag' => 'Carrier Grade',
            ],
            [
                'icon' => 'fa-solid fa-calendar-check',
                'title' => 'Aged & Seasoned Trust History',
                'desc' => 'Our inventory features accounts aged organically over multiple months or years. Pre-warmed activity profiles protect your marketing and data pipelines from algorithmic flags.',
                'tag' => 'High Trust Score',
            ],
            [
                'icon' => 'fa-solid fa-network-wired',
                'title' => 'Clean Residential IP Fingerprint',
                'desc' => 'Registered through pristine residential IP subnets matching target geolocations (US, UK, CA, EU). Zero datacenter footprint guarantees maximum account survival rates.',
                'tag' => 'Zero Blacklist',
            ],
            [
                'icon' => 'fa-solid fa-clock-rotate-left',
                'title' => 'Rapid Replacement SLA Guarantee',
                'desc' => 'Full replacement warranty on all batches. If any credential encounters login discrepancies upon arrival, our technical dispatch team replaces it promptly without friction.',
                'tag' => 'Guaranteed SLA',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Alexei Rostova',
                'role' => 'Director of Growth & Outreach',
                'company' => 'Nexus Performance Agency',
                'avatar' => 'AR',
                'product' => '500x Aged Gmail PVA + US Google Voice',
                'stars' => 5,
                'quote' => 'We provision 500+ aged Gmail and Google Voice lines monthly for high-volume B2B outreach across North America. ITPVA’s replacement turnaround is under 15 minutes, and our inbox deliverability rates have never been higher.',
            ],
            [
                'name' => 'Sarah Lin',
                'role' => 'Lead DevOps Architect',
                'company' => 'CloudShift Labs',
                'avatar' => 'SL',
                'product' => 'AWS 32-vCPU Consoles & DigitalOcean Droplets',
                'stars' => 5,
                'quote' => 'Finding clean AWS developer consoles and DigitalOcean instances with Port 25 verification cleared was always a pain until we tested ITPVA. Every instance launched smoothly with full root credentials and zero billing issues.',
            ],
            [
                'name' => 'Marcus Vance',
                'role' => 'Media Buying Director',
                'company' => 'Apex Affiliate Ventures',
                'avatar' => 'MV',
                'product' => 'Aged Facebook 2FA + Twitter Web3 Profiles',
                'stars' => 5,
                'quote' => 'Their aged Facebook and Twitter/X profiles arrive complete with 2FA authenticator codes, cookies, and genuine post history. Zero algorithmic shadowbans during our Q4 campaigns. Absolutely the best provider in the industry.',
            ],
            [
                'name' => 'David Chen',
                'role' => 'Head of Product Marketing',
                'company' => 'LaunchVelocity Studio',
                'avatar' => 'DC',
                'product' => 'Product Hunt Maker + Seasoned Reddit Karma',
                'stars' => 5,
                'quote' => 'Securing aged Product Hunt and Reddit karma profiles gave our SaaS launch the initial momentum we needed. Support on Telegram answered our questions in seconds, and all credentials worked on the first attempt.',
            ],
            [
                'name' => 'Elena Vasquez',
                'role' => 'E-Commerce Operations Lead',
                'company' => 'OmniRetail Global',
                'avatar' => 'EV',
                'product' => 'US Real-Carrier Voice & Yahoo Mail Batches',
                'stars' => 5,
                'quote' => 'The non-VoIP carrier verification makes all the difference in the world. Real SIM numbers that do not get blocked three days later. We have standardized all our verification workflows with ITPVA.',
            ],
            [
                'name' => 'Jason Krauss',
                'role' => 'Cybersecurity & Automation Researcher',
                'company' => 'Veritas Data Labs',
                'avatar' => 'JK',
                'product' => 'Bulk Workspace Gmail & Microsoft Hotmail',
                'stars' => 5,
                'quote' => 'Clean residential IPs and authentic account seasoning. The CSV delivery format is perfectly structured with usernames, app passwords, and recovery tokens. Flawless execution and reliable stock.',
            ],
        ];

        $faqs = [
            [
                'q' => 'How are credentials delivered after purchase?',
                'a' => 'Credentials are provided in clean, formatted CSV and Excel sheets containing usernames, secure passwords, recovery email access, 2FA backup keys, and proxy login recommendations. Custom JSON or API delivery is also available for bulk orders.',
            ],
            [
                'q' => 'What is the difference between Fresh PVA and Aged accounts?',
                'a' => 'Fresh PVA accounts are newly verified with clean carrier SIMs and pristine IPs. Aged accounts have been organically active over 6 months to 8+ years, providing higher trust ceilings for heavy outreach, ad campaigns, and API rate limits.',
            ],
            [
                'q' => 'What proxies or browser environments are recommended?',
                'a' => 'For optimal longevity, we recommend pairing accounts with clean static residential or mobile 4G/5G proxies using anti-detect browser environments (e.g. AdsPower, Dolphin{anty}, Multilogin) matching the account region.',
            ],
            [
                'q' => 'What is your warranty and replacement policy?',
                'a' => 'All accounts carry an immediate verification warranty. If you encounter any disabled credential or incorrect password upon initial inspection, contact our support within the warranty window for an immediate one-to-one replacement.',
            ],
            [
                'q' => 'Can I order custom batch quantities or specialized platforms?',
                'a' => 'Yes! We frequently fulfill custom orders for specific years, custom area codes, specific cloud quotas, and niche platforms not shown in the default catalog. Contact our team via Telegram or WhatsApp for a bespoke quote.',
            ],
        ];
    @endphp

    {{-- =========================================================================
         1. HERO SECTION: Dark & Blurred Background Image & Floating Animations
         ========================================================================= --}}
    <section class="relative left-1/2 w-screen -translate-x-1/2 overflow-hidden border-b border-slate-800 bg-slate-950 pt-10 pb-20 lg:pt-16 lg:pb-28 text-white">
        
        {{-- Atmospheric Dark Blurred Background Image with Layered Gradient Overlays --}}
        <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
            {{-- Background Image with Blur & Dark Opacity --}}
            <div class="absolute inset-0 scale-110 bg-cover bg-center blur-xl opacity-45" style="background-image: url('{{ asset('images/hero-bg.png') }}');"></div>
            
            {{-- Dark Atmosphere Layered Gradient Veil --}}
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/85 via-slate-950/75 to-slate-950/95"></div>

            {{-- Tech Micro Grid Overlay in Subtle Slate --}}
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#334155_1px,transparent_1px),linear-gradient(to_bottom,#334155_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_75%_65%_at_50%_15%,#000_65%,transparent_100%)] opacity-30"></div>

            {{-- Floating Ambient Glow Orbs --}}
            <div class="animate-float-slow absolute -top-24 left-1/4 h-96 w-96 rounded-full bg-emerald-500/20 blur-3xl"></div>
            <div class="animate-float-reverse absolute top-1/3 -right-24 h-96 w-96 rounded-full bg-teal-500/15 blur-3xl"></div>
        </div>

        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-8">
                
                {{-- Left Column: Hero Narrative & Call to Actions (High Contrast Text) --}}
                <div class="lg:col-span-7">
                    {{-- Live System Status Badge --}}
                    <div class="inline-flex items-center gap-3 rounded-full border border-emerald-500/40 bg-emerald-950/80 px-5 py-2 text-sm font-semibold text-emerald-300 shadow-lg shadow-emerald-950/60 backdrop-blur">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                        </span>
                        <span class="tracking-wide">ITPVA Provisioning Engine v2.4</span>
                        <span class="text-emerald-500">|</span>
                        <span class="font-mono text-xs font-bold text-emerald-300">STATUS: OPERATIONAL</span>
                    </div>

                    {{-- Main Tech Headline --}}
                    <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-[3.75rem] lg:leading-[1.12]">
                        High-Trust <span class="bg-gradient-to-r from-emerald-400 via-teal-300 to-emerald-400 bg-clip-text text-transparent">Verified Accounts</span> & Cloud Infrastructure
                    </h1>

                    {{-- Subheading with Increased Text Size on Dark Background --}}
                    <p class="mt-6 max-w-2xl text-lg leading-relaxed text-slate-200 sm:text-xl">
                        Accelerate marketing pipelines and technical operations with genuine phone-verified (PVA) email assets, real-carrier Google Voice lines, seasoned social profiles, and pre-activated cloud instances (AWS, GCP, Azure, DigitalOcean).
                    </p>

                    {{-- Action CTA Buttons --}}
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="#products" class="inline-flex items-center gap-3 rounded-2xl bg-emerald-600 px-7 py-4 text-base font-bold text-white shadow-xl shadow-emerald-950/50 transition duration-200 hover:-translate-y-0.5 hover:bg-emerald-500 hover:shadow-emerald-500/25">
                            <span>Explore Product Matrix</span>
                            <i class="fa-solid fa-arrow-down text-sm"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 rounded-2xl border-2 border-white/25 bg-white/10 px-7 py-4 text-base font-bold text-white shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-white/20 hover:border-white/40">
                            <i class="fa-solid fa-headset text-emerald-400 text-lg"></i>
                            <span>Contact Tech Sales</span>
                        </a>
                    </div>

                    {{-- Trust / Spec Highlights Strip on Dark Background --}}
                    <div class="mt-10 grid grid-cols-2 gap-4 border-t border-slate-800/90 pt-8 sm:grid-cols-4">
                        <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-200">
                            <i class="fa-solid fa-circle-check text-emerald-400 text-base"></i>
                            <span>Non-VoIP Carrier</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-200">
                            <i class="fa-solid fa-shield text-emerald-400 text-base"></i>
                            <span>Aged 2014-2024</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-200">
                            <i class="fa-solid fa-bolt text-emerald-400 text-base"></i>
                            <span>Instant Dispatch</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-200">
                            <i class="fa-solid fa-rotate text-emerald-400 text-base"></i>
                            <span>Replacement SLA</span>
                        </div>
                    </div>
                </div>

                {{-- Right Column: Interactive IT Live Provisioning Console Card with Floating Badges --}}
                <div class="lg:col-span-5 relative">
                    
                    {{-- Floating Badge 1 (Top-Right) --}}
                    <div class="animate-float absolute -top-5 -right-3 z-20 hidden sm:flex items-center gap-3 rounded-2xl border border-slate-700/80 bg-slate-900/80 px-4 py-3 shadow-2xl shadow-black/60 text-white backdrop-blur-xl">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-950/80 border border-emerald-500/30 text-emerald-400">
                            <i class="fa-solid fa-shield-halved text-base"></i>
                        </span>
                        <div>
                            <p class="text-sm font-bold text-white">100% Non-VoIP</p>
                            <p class="text-xs font-semibold text-emerald-400">Tier-1 US Carriers</p>
                        </div>
                    </div>

                    {{-- Floating Badge 2 (Bottom-Left) --}}
                    <div class="animate-float-reverse absolute -bottom-5 -left-4 z-20 hidden sm:flex items-center gap-3 rounded-2xl border border-slate-700/80 bg-slate-900/80 px-4 py-3 shadow-2xl shadow-black/60 text-white backdrop-blur-xl">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-800/90 border border-slate-700 text-emerald-400">
                            <i class="fa-solid fa-bolt text-base"></i>
                        </span>
                        <div>
                            <p class="text-sm font-bold text-white">Instant Dispatch</p>
                            <p class="text-xs font-semibold text-slate-300">Auto Queue &lt; 3m</p>
                        </div>
                    </div>

                    {{-- Main Console Card (Dark & Blur) --}}
                    <div class="animate-float-subtle relative rounded-3xl border border-slate-700/80 bg-slate-900/85 p-3 shadow-2xl shadow-black/60 backdrop-blur-2xl ring-1 ring-white/10 text-white">
                        
                        {{-- Terminal Window Header --}}
                        <div class="flex items-center justify-between rounded-t-2xl border-b border-slate-800 bg-slate-950/70 px-5 py-4 backdrop-blur-md">
                            <div class="flex items-center gap-2.5">
                                <span class="h-3.5 w-3.5 rounded-full bg-rose-500"></span>
                                <span class="h-3.5 w-3.5 rounded-full bg-amber-400"></span>
                                <span class="h-3.5 w-3.5 rounded-full bg-emerald-400"></span>
                                <span class="ml-2 font-mono text-sm font-bold text-slate-300">itpva-dispatch-node // us-east-1</span>
                            </div>
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/15 border border-emerald-500/30 px-3 py-1 font-mono text-xs font-bold text-emerald-400">
                                <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span> 18ms
                            </span>
                        </div>

                        {{-- Console Metrics Dashboard Bar --}}
                        <div class="grid grid-cols-3 gap-2.5 border-b border-slate-800/80 bg-slate-950/50 p-4">
                            <div class="rounded-xl border border-slate-800 bg-slate-900/80 p-3 text-center backdrop-blur-md">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Delivery SLA</p>
                                <p class="mt-1 font-mono text-xl font-black text-white">99.9%</p>
                            </div>
                            <div class="rounded-xl border border-slate-800 bg-slate-900/80 p-3 text-center backdrop-blur-md">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Dispatch Time</p>
                                <p class="mt-1 font-mono text-xl font-black text-emerald-400">&lt; 3 Min</p>
                            </div>
                            <div class="rounded-xl border border-slate-800 bg-slate-900/80 p-3 text-center backdrop-blur-md">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Active Geos</p>
                                <p class="mt-1 font-mono text-xl font-black text-white">45+ US/EU</p>
                            </div>
                        </div>

                        {{-- Live Provisioning Queue --}}
                        <div class="space-y-3 p-4">
                            <p class="font-mono text-xs font-bold uppercase tracking-wider text-slate-400">LIVE PROVISIONING QUEUE</p>
                            
                            {{-- Item 1 --}}
                            <div class="group flex items-center justify-between rounded-2xl border border-slate-800/80 bg-slate-950/60 p-3.5 backdrop-blur-md transition hover:border-emerald-500/50 hover:bg-slate-800/60">
                                <div class="flex items-center gap-3.5">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-900/90 border border-slate-700/80 shadow-inner">
                                        <img src="{{ asset('images/products/gmail.png') }}" alt="Gmail" class="h-7 w-7 object-contain">
                                    </div>
                                    <div>
                                        <p class="text-base font-bold text-white group-hover:text-emerald-300 transition">Gmail Workspace PVA</p>
                                        <p class="text-xs font-medium text-slate-400">Aged 2015-2024 &bull; 2FA Backup Keys</p>
                                    </div>
                                </div>
                                <span class="rounded-xl bg-emerald-500/15 border border-emerald-500/30 px-3 py-1 font-mono text-xs font-bold text-emerald-400">IN STOCK</span>
                            </div>

                            {{-- Item 2 --}}
                            <div class="group flex items-center justify-between rounded-2xl border border-slate-800/80 bg-slate-950/60 p-3.5 backdrop-blur-md transition hover:border-emerald-500/50 hover:bg-slate-800/60">
                                <div class="flex items-center gap-3.5">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-900/90 border border-slate-700/80 shadow-inner">
                                        <img src="{{ asset('images/products/voice.png') }}" alt="Voice" class="h-7 w-7 object-contain">
                                    </div>
                                    <div>
                                        <p class="text-base font-bold text-white group-hover:text-emerald-300 transition">Google Voice (Non-VoIP)</p>
                                        <p class="text-xs font-medium text-slate-400">Real US Carrier &bull; Calling & SMS</p>
                                    </div>
                                </div>
                                <span class="rounded-xl bg-emerald-500/15 border border-emerald-500/30 px-3 py-1 font-mono text-xs font-bold text-emerald-400">READY</span>
                            </div>

                            {{-- Item 3 --}}
                            <div class="group flex items-center justify-between rounded-2xl border border-slate-800/80 bg-slate-950/60 p-3.5 backdrop-blur-md transition hover:border-emerald-500/50 hover:bg-slate-800/60">
                                <div class="flex items-center gap-3.5">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-900/90 border border-slate-700/80 shadow-inner">
                                        <img src="{{ asset('images/products/digitalocean.png') }}" alt="Cloud" class="h-7 w-7 object-contain">
                                    </div>
                                    <div>
                                        <p class="text-base font-bold text-white group-hover:text-emerald-300 transition">Cloud Consoles (AWS / GCP / DO)</p>
                                        <p class="text-xs font-medium text-slate-400">Card Verified &bull; Quotas Unlocked</p>
                                    </div>
                                </div>
                                <span class="rounded-xl bg-sky-500/15 border border-sky-500/30 px-3 py-1 font-mono text-xs font-bold text-sky-400">ACTIVE</span>
                            </div>

                            {{-- Item 4 --}}
                            <div class="group flex items-center justify-between rounded-2xl border border-slate-800/80 bg-slate-950/60 p-3.5 backdrop-blur-md transition hover:border-emerald-500/50 hover:bg-slate-800/60">
                                <div class="flex items-center gap-3.5">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-900/90 border border-slate-700/80 shadow-inner">
                                        <img src="{{ asset('images/products/facebook.png') }}" alt="Social" class="h-7 w-7 object-contain">
                                    </div>
                                    <div>
                                        <p class="text-base font-bold text-white group-hover:text-emerald-300 transition">Social Media Business</p>
                                        <p class="text-xs font-medium text-slate-400">Seasoned FB / X / LinkedIn Profiles</p>
                                    </div>
                                </div>
                                <span class="rounded-xl bg-amber-500/15 border border-amber-500/30 px-3 py-1 font-mono text-xs font-bold text-amber-400">WARMED</span>
                            </div>
                        </div>

                        {{-- Console Footer Notification --}}
                        <div class="flex items-center justify-between rounded-b-2xl border-t border-slate-800 bg-slate-950/70 px-5 py-3.5 backdrop-blur-md">
                            <div class="flex items-center gap-2.5">
                                <i class="fa-solid fa-lock text-sm text-emerald-400"></i>
                                <span class="font-mono text-xs font-semibold text-slate-300">256-Bit Encrypted Credential Dispatch</span>
                            </div>
                            <a href="{{ route('contact') }}" class="font-mono text-xs font-bold text-emerald-400 hover:text-emerald-300 hover:underline transition">
                                Request Batch &rarr;
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =========================================================================
         2. TECH KPI STATS & ECOSYSTEM STRIP
         ========================================================================= --}}
    <section class="relative left-1/2 w-screen -translate-x-1/2 border-b border-slate-200/80 bg-white py-12">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-6 lg:grid-cols-4 lg:gap-8">
                @foreach ($stats as $st)
                    <div class="flex items-center gap-4 rounded-2xl border border-slate-200/80 bg-slate-50/70 p-5 transition duration-200 hover:border-emerald-300 hover:bg-white hover:shadow-md">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700 ring-1 ring-emerald-200">
                            <i class="{{ $st['icon'] }} text-xl"></i>
                        </div>
                        <div>
                            <p class="text-3xl font-black tracking-tight text-slate-900">{{ $st['value'] }}</p>
                            <p class="text-sm font-bold uppercase tracking-wider text-slate-800">{{ $st['label'] }}</p>
                            <p class="text-xs font-medium text-slate-500">{{ $st['sub'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Supported Tech Logos Ticker --}}
            <div class="mt-12 flex flex-wrap items-center justify-between gap-6 border-t border-slate-100 pt-8 opacity-85">
                <span class="text-sm font-bold uppercase tracking-widest text-slate-500">SUPPORTED PLATFORMS:</span>
                <div class="flex flex-wrap items-center gap-6 sm:gap-10 text-slate-600 text-base font-semibold">
                    <span class="flex items-center gap-2 hover:text-slate-900 transition"><i class="fa-brands fa-google text-slate-700 text-lg"></i> Google</span>
                    <span class="flex items-center gap-2 hover:text-slate-900 transition"><i class="fa-brands fa-aws text-slate-700 text-lg"></i> AWS</span>
                    <span class="flex items-center gap-2 hover:text-slate-900 transition"><i class="fa-brands fa-microsoft text-slate-700 text-lg"></i> Azure</span>
                    <span class="flex items-center gap-2 hover:text-slate-900 transition"><i class="fa-brands fa-digital-ocean text-slate-700 text-lg"></i> DigitalOcean</span>
                    <span class="flex items-center gap-2 hover:text-slate-900 transition"><i class="fa-brands fa-facebook text-slate-700 text-lg"></i> Meta</span>
                    <span class="flex items-center gap-2 hover:text-slate-900 transition"><i class="fa-brands fa-x-twitter text-slate-700 text-lg"></i> X</span>
                    <span class="flex items-center gap-2 hover:text-slate-900 transition"><i class="fa-brands fa-linkedin text-slate-700 text-lg"></i> LinkedIn</span>
                    <span class="flex items-center gap-2 hover:text-slate-900 transition"><i class="fa-brands fa-reddit-alien text-slate-700 text-lg"></i> Reddit</span>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         3. PRODUCT CATALOG MATRIX: Bigger Icons, Increased Text Size, Pure Tailwind
         ========================================================================= --}}
    <section id="products" class="relative left-1/2 w-screen -translate-x-1/2 bg-slate-50/70 py-16 lg:py-24">
        <div
            x-data="{
                activeFilter: 'all',
                searchQuery: '',
                products: @js($products),
                get filteredProducts() {
                    return this.products.filter(item => {
                        const matchesCategory = this.activeFilter === 'all' || item.category === this.activeFilter;
                        const q = this.searchQuery.trim().toLowerCase();
                        const matchesSearch = !q ||
                            item.title.toLowerCase().includes(q) ||
                            item.description.toLowerCase().includes(q) ||
                            item.category_label.toLowerCase().includes(q) ||
                            item.specs.some(s => s.toLowerCase().includes(q));
                        return matchesCategory && matchesSearch;
                    });
                }
            }"
            class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8"
        >
            {{-- Section Header with Increased Text Sizes --}}
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2.5 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-sm font-bold uppercase tracking-[0.25em] text-emerald-800">
                        <i class="fa-solid fa-layer-group text-sm"></i>
                        Inventory &amp; Catalog Matrix
                    </span>
                    <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        Explore Verified Digital Products &amp; Cloud Nodes
                    </h2>
                    <p class="mt-4 text-lg leading-relaxed text-slate-700">
                        Real-time inventory of verified assets. Filter by infrastructure category or search directly by platform name. Click any card to access packages and detailed specifications.
                    </p>
                </div>

                {{-- Live Search Input with Larger Text --}}
                <div class="w-full lg:w-96">
                    <label for="product-search" class="sr-only">Search products</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                            <i class="fa-solid fa-magnifying-glass text-base"></i>
                        </div>
                        <input
                            id="product-search"
                            type="text"
                            x-model="searchQuery"
                            placeholder="Search (e.g. Gmail, Voice, AWS)..."
                            class="w-full rounded-2xl border-2 border-slate-200 bg-white py-3.5 pl-11 pr-11 text-base font-medium text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-emerald-500 focus:outline-none focus:ring-4 focus:ring-emerald-500/10"
                        />
                        <button
                            x-show="searchQuery.length > 0"
                            @click="searchQuery = ''"
                            type="button"
                            class="absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400 hover:text-slate-600"
                        >
                            <i class="fa-solid fa-xmark text-base"></i>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Category Filter Pills with Increased Text Size --}}
            <div class="mt-10 flex flex-wrap items-center gap-3 border-b border-slate-200/90 pb-6">
                @foreach ($filters as $flt)
                    <button
                        type="button"
                        @click="activeFilter = '{{ $flt['key'] }}'"
                        :class="activeFilter === '{{ $flt['key'] }}'
                            ? 'bg-slate-900 text-white shadow-lg shadow-slate-900/15 ring-2 ring-slate-900'
                            : 'bg-white text-slate-800 hover:border-slate-300 hover:bg-slate-100/70 border border-slate-200'"
                        class="inline-flex items-center gap-2.5 rounded-2xl px-5 py-3 text-sm sm:text-base font-bold transition duration-150"
                    >
                        <i class="{{ $flt['icon'] }} text-sm"></i>
                        <span>{{ $flt['label'] }}</span>
                        <span
                            class="ml-1 rounded-full px-2.5 py-0.5 text-xs font-mono font-bold"
                            :class="activeFilter === '{{ $flt['key'] }}' ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-600'"
                            x-text="products.filter(p => '{{ $flt['key'] }}' === 'all' || p.category === '{{ $flt['key'] }}').length"
                        ></span>
                    </button>
                @endforeach
            </div>

            {{-- Results Counter Bar --}}
            <div class="mt-6 flex items-center justify-between text-sm font-semibold text-slate-600">
                <p>Showing <span class="font-black text-slate-900" x-text="filteredProducts.length"></span> platforms</p>
                <p x-show="searchQuery" class="text-emerald-700">Filter applied: "<span x-text="searchQuery"></span>"</p>
            </div>

            {{-- Products Grid with Much Bigger Product Icons & Larger Typography --}}
            <div class="mt-8 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <template x-for="product in filteredProducts" :key="product.route + product.title">
                    <a
                        :href="product.route"
                        class="group relative flex flex-col justify-between rounded-3xl border-2 border-slate-200/90 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-500 hover:shadow-2xl hover:shadow-emerald-500/10"
                    >
                        <div>
                            {{-- Top Row: BIG Product Icon & Status Tags --}}
                            <div class="flex items-start justify-between gap-5">
                                {{-- BIGGER Product Image Container --}}
                                <div class="flex h-24 w-24 shrink-0 items-center justify-center rounded-2xl border-2 border-slate-200/90 bg-gradient-to-br from-slate-50 to-white p-3.5 shadow-sm transition duration-300 group-hover:scale-105 group-hover:border-emerald-300 group-hover:bg-emerald-50/30 group-hover:shadow-md">
                                    <img :src="product.image" :alt="product.title" class="h-full w-full object-contain filter drop-shadow-sm">
                                </div>

                                {{-- Stock Badges with Bigger Text --}}
                                <div class="flex flex-col items-end gap-2">
                                    <span class="rounded-xl bg-emerald-50 px-3 py-1.5 text-xs font-extrabold text-emerald-800 ring-1 ring-emerald-200/80" x-text="product.badge"></span>
                                    <span class="text-xs font-mono font-bold uppercase tracking-wider text-slate-500" x-text="product.category_label"></span>
                                </div>
                            </div>

                            {{-- Product Title & Description with Increased Text Sizes --}}
                            <div class="mt-6">
                                <h3 class="text-2xl font-bold tracking-tight text-slate-900 transition group-hover:text-emerald-700" x-text="product.title"></h3>
                                <p class="mt-2.5 text-base leading-relaxed text-slate-600 line-clamp-2" x-text="product.description"></p>
                            </div>

                            {{-- Technical Specs List with Clear Font Size --}}
                            <div class="mt-6 space-y-2 rounded-2xl border border-slate-100 bg-slate-50/70 p-4">
                                <template x-for="spec in product.specs" :key="spec">
                                    <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-700">
                                        <i class="fa-solid fa-circle-check text-xs text-emerald-600"></i>
                                        <span x-text="spec"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        {{-- Card Footer CTA with Larger Font Size --}}
                        <div class="mt-7 flex items-center justify-between border-t border-slate-100 pt-5">
                            <span class="text-sm font-bold text-emerald-700 group-hover:underline">
                                Inspect Packages &amp; Order
                            </span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-slate-100 text-slate-800 transition duration-300 group-hover:bg-emerald-600 group-hover:text-white group-hover:shadow-md">
                                <i class="fa-solid fa-arrow-right text-sm"></i>
                            </span>
                        </div>
                    </a>
                </template>
            </div>

            {{-- Empty State (When no search match) --}}
            <div
                x-show="filteredProducts.length === 0"
                class="mt-12 rounded-3xl border-2 border-dashed border-slate-300 bg-white p-14 text-center"
                style="display: none;"
            >
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100 text-slate-500">
                    <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                </div>
                <h3 class="mt-5 text-xl font-bold text-slate-900">No matching infrastructure found</h3>
                <p class="mt-2 text-base text-slate-600">We couldn't find any products matching your search query. Try clearing your filters or contact our team for custom platform orders.</p>
                <button
                    type="button"
                    @click="activeFilter = 'all'; searchQuery = ''"
                    class="mt-6 inline-flex items-center gap-2.5 rounded-2xl bg-slate-900 px-6 py-3 text-sm font-bold text-white transition hover:bg-emerald-600"
                >
                    <i class="fa-solid fa-rotate-left"></i>
                    <span>Reset All Filters</span>
                </button>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         4. CUSTOMER TESTIMONIALS SECTION (Interactive Carousel)
         ========================================================================= --}}
    <section class="relative left-1/2 w-screen -translate-x-1/2 border-t border-slate-200/80 bg-white py-16 lg:py-24 overflow-hidden">
        {{-- Ambient Subtle Light Spots --}}
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -top-20 left-1/3 h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 h-80 w-80 rounded-full bg-teal-100/40 blur-3xl"></div>
        </div>

        <div
            x-data="{
                testimonials: @js($testimonials),
                currentIndex: 0,
                autoSlide: true,
                timer: null,
                startAuto() {
                    this.timer = setInterval(() => {
                        this.next();
                    }, 5000);
                },
                stopAuto() {
                    if (this.timer) clearInterval(this.timer);
                },
                next() {
                    this.currentIndex = (this.currentIndex + 1) % this.testimonials.length;
                },
                prev() {
                    this.currentIndex = (this.currentIndex - 1 + this.testimonials.length) % this.testimonials.length;
                },
                goTo(index) {
                    this.currentIndex = index;
                }
            }"
            x-init="startAuto()"
            @mouseenter="stopAuto()"
            @mouseleave="startAuto()"
            class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8"
        >
            {{-- Carousel Section Header --}}
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                <div>
                    <span class="inline-flex items-center gap-2.5 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-sm font-bold uppercase tracking-[0.25em] text-emerald-800">
                        <i class="fa-solid fa-comments text-sm"></i>
                        Client Testimonials
                    </span>
                    <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        Trusted by 10,000+ Growth &amp; Tech Teams
                    </h2>
                    <p class="mt-3 text-lg leading-relaxed text-slate-600">
                        Read verified feedback from agency directors, marketing teams, and developers scaling their digital operations.
                    </p>
                </div>

                {{-- Carousel Nav Arrows --}}
                <div class="flex items-center gap-3">
                    <button
                        type="button"
                        @click="prev()"
                        aria-label="Previous Testimonial"
                        class="flex h-12 w-12 items-center justify-center rounded-2xl border-2 border-slate-200 bg-white text-slate-800 shadow-sm transition hover:border-emerald-500 hover:bg-emerald-600 hover:text-white"
                    >
                        <i class="fa-solid fa-chevron-left text-sm"></i>
                    </button>
                    <button
                        type="button"
                        @click="next()"
                        aria-label="Next Testimonial"
                        class="flex h-12 w-12 items-center justify-center rounded-2xl border-2 border-slate-200 bg-white text-slate-800 shadow-sm transition hover:border-emerald-500 hover:bg-emerald-600 hover:text-white"
                    >
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </button>
                </div>
            </div>

            {{-- Testimonials Carousel Slide Container --}}
            <div class="mt-12">
                {{-- Single Featured Slide with Smooth Transition --}}
                <div class="relative overflow-hidden rounded-[2.5rem] border-2 border-slate-200/90 bg-gradient-to-br from-white via-slate-50/60 to-white p-8 sm:p-12 lg:p-16 shadow-xl shadow-slate-900/5">
                    
                    {{-- Decorative Giant Quote Icon in Background --}}
                    <div class="pointer-events-none absolute -bottom-8 right-8 text-slate-100 opacity-60">
                        <i class="fa-solid fa-quote-right text-[12rem] leading-none"></i>
                    </div>

                    <template x-for="(item, idx) in testimonials" :key="item.name + idx">
                        <div
                            x-show="currentIndex === idx"
                            x-transition:enter="transition ease-out duration-400"
                            x-transition:enter-start="opacity-0 translate-x-8"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave-end="opacity-0 -translate-x-8 absolute inset-0"
                            class="relative z-10"
                        >
                            {{-- Star Rating --}}
                            <div class="flex items-center gap-1.5 text-amber-400 text-lg">
                                <template x-for="s in item.stars" :key="s">
                                    <i class="fa-solid fa-star"></i>
                                </template>
                                <span class="ml-3 rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-800">
                                    <i class="fa-solid fa-circle-check text-emerald-600"></i> Verified Order
                                </span>
                            </div>

                            {{-- Testimonial Quote with Large, High-Contrast Typography --}}
                            <blockquote class="mt-6 text-xl sm:text-2xl lg:text-3xl font-medium leading-relaxed text-slate-900">
                                &ldquo;<span x-text="item.quote"></span>&rdquo;
                            </blockquote>

                            {{-- Product Ordered Badge --}}
                            <div class="mt-8 inline-flex items-center gap-2 rounded-xl bg-slate-100 border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700">
                                <i class="fa-solid fa-box-open text-emerald-600"></i>
                                <span class="text-slate-500 font-normal">Package:</span>
                                <span class="font-bold text-slate-900" x-text="item.product"></span>
                            </div>

                            {{-- Author Info Strip --}}
                            <div class="mt-8 flex items-center gap-4 border-t border-slate-200/80 pt-6">
                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-tr from-emerald-600 to-teal-700 text-lg font-black text-white shadow-md shadow-emerald-600/20" x-text="item.avatar"></div>
                                <div>
                                    <h4 class="text-xl font-bold text-slate-900" x-text="item.name"></h4>
                                    <p class="text-base text-slate-600">
                                        <span x-text="item.role"></span> &bull; <span class="font-semibold text-emerald-700" x-text="item.company"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                {{-- Carousel Indicator Dots --}}
                <div class="mt-8 flex items-center justify-center gap-3">
                    <template x-for="(item, idx) in testimonials" :key="'dot-' + idx">
                        <button
                            type="button"
                            @click="goTo(idx)"
                            :class="currentIndex === idx ? 'w-10 bg-emerald-600' : 'w-3 bg-slate-300 hover:bg-slate-400'"
                            class="h-3 rounded-full transition-all duration-300"
                            :aria-label="'Go to slide ' + (idx + 1)"
                        ></button>
                    </template>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================================
         5. IT ARCHITECTURE & SECURITY PILLARS
         ========================================================================= --}}
    <section class="relative left-1/2 w-screen -translate-x-1/2 border-y border-slate-200/80 bg-white py-16 lg:py-24">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-flex items-center gap-2.5 rounded-full border border-emerald-200 bg-emerald-50 px-4 py-1.5 text-sm font-bold uppercase tracking-[0.25em] text-emerald-800">
                    <i class="fa-solid fa-shield-check text-sm"></i>
                    Enterprise Standards
                </span>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    Engineered for Reliability, Longevity &amp; Scale
                </h2>
                <p class="mx-auto mt-4 max-w-2xl text-lg text-slate-600">
                    Standard bulk accounts fail due to dirty datacenter IPs and virtual VoIP recycling. ITPVA utilizes strict provisioning protocols to protect your campaigns.
                </p>
            </div>

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($pillars as $pil)
                    <div class="relative flex flex-col justify-between rounded-3xl border-2 border-slate-200/90 bg-slate-50/60 p-7 transition duration-300 hover:border-emerald-400 hover:bg-white hover:shadow-xl hover:shadow-emerald-500/10">
                        <div>
                            <div class="flex items-center justify-between">
                                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-700">
                                    <i class="{{ $pil['icon'] }} text-2xl"></i>
                                </div>
                                <span class="rounded-full bg-slate-200/80 px-3 py-1 text-xs font-mono font-bold text-slate-700">{{ $pil['tag'] }}</span>
                            </div>
                            <h3 class="mt-6 text-xl font-bold text-slate-900">{{ $pil['title'] }}</h3>
                            <p class="mt-3 text-base leading-relaxed text-slate-600">{{ $pil['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================================================================
         6. TECHNICAL FAQ SECTION (Interactive Accordion)
         ========================================================================= --}}
    <section class="relative left-1/2 w-screen -translate-x-1/2 bg-slate-50/70 py-16 lg:py-24">
        <div class="mx-auto w-full max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-flex items-center gap-2.5 rounded-full border border-slate-300 bg-white px-4 py-1.5 text-sm font-bold uppercase tracking-[0.25em] text-slate-800 shadow-sm">
                    <i class="fa-solid fa-circle-question text-emerald-600 text-sm"></i>
                    Frequently Asked Questions
                </span>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    Answers for Tech Buyers &amp; Operations Teams
                </h2>
                <p class="mt-4 text-lg text-slate-600">
                    Everything you need to know about credentials delivery, security practices, and bulk customization.
                </p>
            </div>

            <div class="mt-12 space-y-5">
                @foreach ($faqs as $fq)
                    <details class="group rounded-3xl border-2 border-slate-200/90 bg-white p-6 shadow-sm transition hover:border-emerald-400" @if ($loop->first) open @endif>
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-slate-900">
                            <span class="text-lg sm:text-xl">{{ $fq['q'] }}</span>
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-slate-100 text-slate-700 transition group-open:rotate-180 group-open:bg-emerald-100 group-open:text-emerald-700">
                                <i class="fa-solid fa-chevron-down text-sm"></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-base leading-relaxed text-slate-700 border-t border-slate-100 pt-5">
                            {{ $fq['a'] }}
                        </p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================================================================
         7. ENTERPRISE BATCH & CUSTOM INQUIRY CTA BANNER
         ========================================================================= --}}
    <section class="relative left-1/2 w-screen -translate-x-1/2 border-t border-slate-200/80 bg-white py-16">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-[2.5rem] border-2 border-emerald-300/80 bg-gradient-to-br from-emerald-50/80 via-white to-teal-50/60 p-8 shadow-xl sm:p-12 lg:p-16">
                {{-- Decorative light sphere --}}
                <div class="pointer-events-none absolute -right-20 -top-20 h-96 w-96 rounded-full bg-emerald-200/40 blur-3xl"></div>

                <div class="relative z-10 grid gap-8 lg:grid-cols-12 lg:items-center">
                    <div class="lg:col-span-8">
                        <span class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-4 py-1.5 text-sm font-bold uppercase tracking-wider text-emerald-800">
                            <i class="fa-solid fa-sparkles"></i>
                            Custom Volume &amp; API Dispatch
                        </span>
                        <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                            Need Custom Quantities, Aged Batches, or Cloud Quotas?
                        </h2>
                        <p class="mt-4 max-w-2xl text-lg text-slate-600">
                            Our team works directly with agencies, growth firms, and SaaS operations. Connect directly with our dispatch engineers on Telegram or WhatsApp for customized procurement plans.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3.5 sm:flex-row lg:col-span-4 lg:justify-end">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 rounded-2xl bg-slate-900 px-7 py-4 text-base font-bold text-white shadow-xl transition duration-200 hover:bg-emerald-600 hover:shadow-emerald-600/25">
                            <i class="fa-solid fa-paper-plane text-base"></i>
                            <span>Send Custom Inquiry</span>
                        </a>
                        <a href="https://t.me" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-3 rounded-2xl border-2 border-slate-300 bg-white px-7 py-4 text-base font-bold text-slate-800 shadow-sm transition duration-200 hover:border-emerald-500 hover:text-emerald-700">
                            <i class="fa-brands fa-telegram text-sky-500 text-lg"></i>
                            <span>Live Telegram Help</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


