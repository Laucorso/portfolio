<template>
    <GuestLayout>
        <Head title="Laura Cormand" />

        <div class="museum-shell relative min-h-screen overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div class="museum-orb museum-orb-blue"></div>
                <div class="museum-orb museum-orb-lilac"></div>
                <div class="museum-orb museum-orb-gold"></div>
            </div>

            <div class="relative z-10 py-14 md:py-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <header class="mx-auto max-w-4xl text-center">
                        <p
                            class="font-body text-xs uppercase tracking-[0.35em] text-slate-500"
                        ></p>

                        <h1
                            class="museum-hero-punch font-display mt-6 text-6xl md:text-7xl lg:text-8xl font-semibold leading-[0.9] text-slate-900"
                        >
                            Full Stack
                            <span class="block text-[#274a78]">Developer</span>
                        </h1>

                        <p
                            class="museum-hero-punch museum-hero-punch-delay-1 font-body mx-auto mt-6 max-w-2xl text-base md:text-lg leading-8 text-slate-600"
                        >
                            A quieter, more curated digital presence: precise
                            interfaces, thoughtful motion and a perspective
                            shaped by philosophy, technology and ethics.
                        </p>

                        <div class="mt-8 flex flex-wrap justify-center gap-3">
                            <span
                                class="museum-hero-punch museum-hero-punch-delay-2 museum-pill museum-pill-blue"
                                >Product clarity</span
                            >
                            <span
                                class="museum-hero-punch museum-hero-punch-delay-3 museum-pill museum-pill-lilac"
                                >Thoughtful systems</span
                            >
                            <span
                                class="museum-hero-punch museum-hero-punch-delay-4 museum-pill museum-pill-gold"
                                >Human-centered UX</span
                            >
                        </div>
                    </header>

                    <div class="mt-16 space-y-14 md:space-y-20">
                        <section
                            id="contact"
                            class="museum-flow-section museum-flow-left"
                        >
                            <div class="museum-flow-label museum-reveal">
                                Contact / practice
                            </div>
                            <div
                                class="museum-flow-copy museum-reveal museum-reveal-delay-1"
                            >
                                <p
                                    class="font-display text-4xl md:text-5xl text-slate-900 max-w-xl"
                                >
                                    Building with intention.
                                </p>

                                <p
                                    class="font-body mt-5 max-w-2xl text-base md:text-lg leading-8 text-slate-600"
                                >
                                    Open to joining projects where technology is
                                    treated as a craft, design is considered
                                    with care and ethical decisions are part of
                                    the process.
                                </p>

                                <div class="mt-7 flex flex-wrap gap-3">
                                    <a
                                        href="https://wa.me/34655443754"
                                        target="_blank"
                                        class="museum-link-chip"
                                        >WhatsApp · +34 655 443 754</a
                                    >
                                    <a
                                        href="mailto:laucorrs@gmail.com"
                                        class="museum-link-chip"
                                        >Email · laucorrs@gmail.com</a
                                    >
                                    <a
                                        href="/docs/CV-LauraCormand.pdf"
                                        target="_blank"
                                        class="museum-link-chip museum-link-chip-gold"
                                        >CV</a
                                    >
                                </div>
                            </div>

                            <div
                                class="museum-flow-aside museum-reveal museum-reveal-delay-2"
                            >
                                <div class="flex items-start gap-5 md:gap-6">
                                    <div class="museum-photo-flicker shrink-0">
                                        <img
                                            src="/storage/images/me.jpg"
                                            alt="Laura Cormand"
                                            class="museum-portrait"
                                        />
                                    </div>
                                    <div class="museum-photo-quote museum-reveal w-full pt-4 md:pt-5">
                                        <p
                                            class="museum-quote-line museum-quote-line-1 mt-3 max-w-[22rem] font-display text-[1.2rem] leading-[1.05] tracking-[-0.04em] text-[#274a78] md:max-w-[30rem] md:text-[2.1rem]"
                                        >
                                            GOOD TECHNOLOGY
                                        </p>
                                        <p
                                            class="museum-quote-line museum-quote-line-2 mt-1 max-w-[22rem] font-display text-[2.1rem] font-semibold leading-[0.95] tracking-[-0.05em] text-[#274a78] md:max-w-[38rem] md:text-[3.4rem]"
                                        >
                                            begins with clear decisions,
                                        </p>
                                        <p
                                            class="museum-quote-line museum-quote-line-3 mt-1 max-w-[22rem] font-display text-[1.15rem] leading-[1.12] tracking-[-0.04em] text-[#274a78] md:max-w-[32rem] md:text-[1.8rem]"
                                        >
                                            solid thinking and professional execution.
                                        </p>
                                    </div>
                                </div>
                                <p
                                    class="museum-note museum-reveal museum-reveal-delay-4 mt-4 font-body text-[0.62rem] uppercase tracking-[0.24em] text-slate-500"
                                >
                                    TECHNOLOGY · ETHICS · TRUST
                                </p>
                            </div>
                        </section>

                        <section
                            id="tech"
                            class="museum-flow-section museum-flow-right museum-flow-dark museum-flow-dark-compact"
                        >
                            <div
                                class="museum-flow-label museum-flow-label-light museum-reveal"
                            >
                                Studio tools
                            </div>
                            <div
                                class="museum-flow-copy museum-reveal museum-reveal-delay-1"
                            >
                                <p
                                    class="font-display text-3xl md:text-4xl text-white max-w-xl"
                                >
                                    A restrained toolset for calm, reliable
                                    product surfaces.
                                </p>

                                <p
                                    class="font-body mt-4 max-w-2xl text-sm md:text-base leading-7 text-slate-300"
                                >
                                    The stack stays quiet and useful: systems
                                    that hold together, interfaces that breathe
                                    and details that do not distract from the
                                    work.
                                </p>

                            </div>

                            <div
                                class="museum-flow-aside museum-flow-aside-grid museum-reveal museum-reveal-delay-2"
                            >
                                <div
                                    v-for="(tech, index) in technologies.slice(
                                        0,
                                        6,
                                    )"
                                    :key="index"
                                    class="museum-tech-object"
                                >
                                    <div class="museum-tech-object-inner">
                                        <div
                                            v-if="tech.type === 'svg'"
                                            v-html="tech.icon"
                                            class="h-8 w-8"
                                        ></div>
                                        <img
                                            v-else
                                            :src="tech.icon"
                                            :alt="tech.name"
                                            class="h-8 w-8 object-contain"
                                        />
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section
                            id="projects"
                            class="museum-flow-section museum-flow-left"
                        >
                            <div class="museum-flow-label museum-reveal">
                                Professional experience
                            </div>
                            <div
                                class="museum-flow-copy museum-reveal museum-reveal-delay-1"
                            >
                                <p
                                    class="font-display text-4xl md:text-5xl text-slate-900 max-w-xl"
                                >
                                    Highlighted chapters.
                                </p>

                                <p
                                    class="font-body mt-5 max-w-2xl text-base md:text-lg leading-8 text-slate-600"
                                >
                                    Instead of a hard timeline, this section
                                    reads as three curated moments: the roles,
                                    the context and the craft that define each
                                    chapter.
                                </p>
                            </div>

                            <div
                                class="museum-flow-aside museum-collage museum-reveal museum-reveal-delay-2"
                            >
                                <article
                                    class="museum-collage-card museum-collage-card-feature museum-collage-card-blank museum-card-delay-1"
                                >
                                    <div
                                        class="museum-collage-accent museum-collage-accent-blue"
                                    ></div>
                                    <p
                                        class="font-body text-[0.68rem] uppercase tracking-[0.22em] text-slate-500"
                                    >
                                        Autonomy
                                    </p>
                                    <p
                                        class="font-display mt-6 text-3xl md:text-4xl text-slate-900 leading-tight"
                                    >
                                        Independent work,<br />with structure
                                        and perspective.
                                    </p>
                                    <p
                                        class="font-body mt-5 text-sm md:text-base leading-7 text-slate-600"
                                    >
                                        I like building what is needed, from
                                        idea to delivery: clear requirements,
                                        quiet execution and a product that
                                        actually holds up in use.
                                    </p>
                                    <a
                                        href="https://nafentbikes.com"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="mt-6 block border border-slate-200 bg-white/70 px-3 py-2 transition hover:bg-white/90"
                                    >
                                        <div
                                            class="flex items-center justify-between gap-3"
                                        >
                                            <p
                                                class="font-body text-[0.62rem] uppercase tracking-[0.2em] text-slate-500"
                                            >
                                                Project work
                                            </p>
                                            <img
                                                src="https://nafentbikes.com/wp-content/uploads/2025/05/na_fent_bikes_rental_black_v1.svg"
                                                alt="Nafent Bikes"
                                                class="h-7 w-auto object-contain opacity-90"
                                            />
                                        </div>
                                        <p
                                            class="mt-2 font-display text-2xl text-slate-900 leading-none"
                                        >
                                            nafentbikes.com
                                        </p>
                                    </a>
                                </article>

                                <div class="museum-collage-column">
                                    <article
                                        class="museum-collage-card museum-collage-card-support museum-card-delay-2"
                                    >
                                        <div
                                            class="museum-collage-accent museum-collage-accent-lilac"
                                        ></div>
                                        <div class="flex items-start gap-3">
                                            <img
                                                :src="experiences[0].icon"
                                                :alt="experiences[0].company"
                                                class="h-11 w-11 rounded-xl object-cover bg-white shadow-sm"
                                            />
                                            <div class="min-w-0">
                                                <p
                                                    class="font-body text-xs uppercase tracking-[0.2em] text-slate-500"
                                                >
                                                    {{ experiences[0].company }}
                                                </p>
                                                <h3
                                                    class="font-display text-2xl text-slate-900 leading-tight"
                                                >
                                                    {{ experiences[0].role }}
                                                </h3>
                                            </div>
                                        </div>

                                        <p
                                            class="font-body mt-3 text-sm leading-7 text-slate-600"
                                        >
                                            {{ experiences[0].description }}
                                        </p>

                                        <ul
                                            class="mt-4 space-y-2 text-sm leading-6 text-slate-600"
                                        >
                                            <li
                                                v-for="(
                                                    item, i
                                                ) in experiences[0].achievements.slice(
                                                    0,
                                                    2,
                                                )"
                                                :key="i"
                                                class="flex items-start gap-3"
                                            >
                                                <span
                                                    class="mt-2 inline-block h-1.5 w-1.5 rounded-full bg-gradient-to-r from-[#4e86c7] via-[#a98ae6] to-[#d8c67a]"
                                                ></span>
                                                <span>{{ item }}</span>
                                            </li>
                                        </ul>
                                    </article>

                                    <article
                                        v-for="(
                                            exp, index
                                        ) in experiences.slice(1)"
                                        :key="index"
                                        :class="[
                                            'museum-collage-card',
                                            'museum-collage-card-support',
                                            'museum-card-delay-' + (index + 3),
                                        ]"
                                    >
                                        <div
                                            class="museum-collage-accent"
                                            :class="
                                                index === 0
                                                    ? 'museum-collage-accent-lilac'
                                                    : 'museum-collage-accent-gold'
                                            "
                                        ></div>
                                        <div class="flex items-start gap-3">
                                            <img
                                                :src="exp.icon"
                                                :alt="exp.company"
                                                class="h-11 w-11 rounded-xl object-cover bg-white shadow-sm"
                                            />
                                            <div class="min-w-0">
                                                <p
                                                    class="font-body text-xs uppercase tracking-[0.2em] text-slate-500"
                                                >
                                                    {{ exp.company }}
                                                </p>
                                                <h3
                                                    class="font-display text-2xl text-slate-900 leading-tight"
                                                >
                                                    {{ exp.role }}
                                                </h3>
                                            </div>
                                        </div>

                                        <p
                                            class="font-body mt-3 text-sm leading-7 text-slate-600"
                                        >
                                            {{ exp.description }}
                                        </p>
                                    </article>
                                </div>
                            </div>
                        </section>

                        <section
                            id="about"
                            class="museum-flow-section museum-flow-right"
                        >
                            <div class="museum-flow-label museum-reveal">
                                My story
                            </div>
                            <div
                                class="museum-flow-copy museum-reveal museum-reveal-delay-1"
                            >
                                <p
                                    class="font-display text-4xl md:text-5xl text-slate-900 max-w-xl"
                                >
                                    Philosophy, technology, ethics.
                                </p>

                                <div
                                    class="mt-5 space-y-6 font-body text-base md:text-lg leading-8 text-slate-700 max-w-2xl"
                                >
                                    <p>
                                        My path began in the classrooms of
                                        <span
                                            class="font-semibold text-[#274a78]"
                                            >Philosophy</span
                                        >
                                        at the University of Barcelona, where I
                                        learned to read complexity with
                                        patience, context and perspective.
                                    </p>
                                    <p>
                                        That training led naturally into
                                        <span
                                            class="font-semibold text-[#8a78d8]"
                                            >technology</span
                                        >, where programming became a way to
                                        shape structure, meaning and interaction
                                        from first principles.
                                    </p>
                                    <p>
                                        Today I work at the intersection of
                                        those two worlds, combining critical
                                        thinking, product sensitivity and
                                        precise execution to build interfaces
                                        that feel calm, deliberate and ethically
                                        considered.
                                    </p>
                                </div>

                                <div class="mt-8 flex flex-wrap gap-3">
                                    <span class="museum-ethic-tag"
                                        >Philosophy</span
                                    >
                                    <span class="museum-ethic-tag"
                                        >Technology</span
                                    >
                                    <span
                                        class="museum-ethic-tag museum-ethic-tag-gold"
                                        >Ethics</span
                                    >
                                </div>
                            </div>

                            <div
                                class="museum-flow-aside museum-quote-shell museum-reveal museum-reveal-delay-2"
                            >
                                <p class="museum-quote">
                                    The best interfaces are not louder. They are
                                    more honest.
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head } from "@inertiajs/vue3";
import { onMounted, onUnmounted } from "vue";

const technologies = [
    {
        name: "Laravel",
        icon: `<svg aria-hidden="true" role="img" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg"><title>Laravel</title><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></svg>`,
        bgColor: "bg-gradient-to-br from-red-500 to-red-600",
        type: "svg",
    },
    {
        name: "Vue.js",
        icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 261.76 226.69"><path fill="#41B883" d="M0 0h65.4l65.5 113.4L196.3 0h65.4L130.9 226.7z"/><path fill="#34495E" d="M65.4 0h65.4l-65.4 113.4L0 0z"/></svg>`,
        bgColor: "bg-gradient-to-br from-green-500 to-emerald-600",
        type: "svg",
    },
    {
        name: "Tailwind",
        icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path fill="#38BDF8" d="M24 9c-6 0-10 3-12 9 2-3 4.667-4.5 8-4.5 3.6 0 6.2 1.8 7.8 5.4 1.2 2.4 3 3.6 5.4 3.6 4.8 0 7.8-2.4 9-7.2-2 3-4.7 4.5-8 4.5-3.6 0-6.2-1.8-7.8-5.4C25.2 10.2 23.4 9 21 9zM12 24c-6 0-10 3-12 9 2-3 4.7-4.5 8-4.5 3.6 0 6.2 1.8 7.8 5.4 1.2 2.4 3 3.6 5.4 3.6 4.8 0 7.8-2.4 9-7.2-2 3-4.7 4.5-8 4.5-3.6 0-6.2-1.8-7.8-5.4C13.2 25.2 11.4 24 9 24z"/></svg>`,
        bgColor: "bg-gradient-to-br from-blue-500 to-cyan-600",
        type: "svg",
    },
    {
        name: "MySQL",
        icon: "/storage/images/mysql.png",
        bgColor: "bg-gradient-to-br from-orange-500 to-amber-600",
        type: "img",
    },
    {
        name: "PostgreSQL",
        icon: "/storage/images/postgr.png",
        bgColor: "bg-gradient-to-br from-blue-600 to-indigo-600",
        type: "img",
    },
    {
        name: "Docker",
        icon: "/storage/images/docker.png",
        bgColor: "bg-gradient-to-br from-blue-400 to-sky-500",
        type: "img",
    },
    {
        name: "AWS",
        icon: "/storage/images/aws.png",
        bgColor: "bg-gradient-to-br from-yellow-500 to-orange-500",
        type: "img",
    },
    {
        name: "JIRA",
        icon: "/storage/images/jira.png",
        bgColor: "bg-gradient-to-br from-blue-700 to-indigo-700",
        type: "img",
    },
    {
        name: "Figma",
        icon: "storage/images/figma-bo.png",
        bgColor: "bg-gradient-to-br from-purple-500 to-violet-600",
        type: "img",
    },
];

const experiences = [
    {
        company: "Trioteca",
        icon: "/storage/images/trioteca.png",
        role: "Full Stack Developer",
        period: "2025 - Present",
        description: "Web development, user area + corporate CRM development",
        achievements: [
            "Implemented new features in the user area -> users can independently send leads to banks to apply for a mortgage",
            "Automated client notifications via email and WhatsApp",
            "Developed online appraisal module",
            "Built data extraction from ID cards and payslips using OCR Textract / Gemini AI",
            "Frontend development with close collaboration with designers",
            "Developed front-agnostic project for new website -> Serverless framework + Nuxt.js",
        ],
        tech: ["Laravel", "Vue.js", "Laravel Nova", "AI", "AWS"],
    },
    {
        company: "Clicktotravel",
        icon: "/storage/images/clicktotravel.png",
        role: "Backend Developer",
        period: "2023 – 2024",
        description:
            "Custom CMS development for hotel management with SEO focus.",
        achievements: [
            "Implemented CMS in Laravel 10 with roles and permissions (Spatie)",
            "Automated sitemap generation with cronjobs",
            "Integrated BunnyCDN for content optimization",
            "Integrated ChatGPT AI for hotel offers functionality",
        ],
        tech: ["Laravel", "MySQL", "BunnyCDN", "Spatie Roles/Permissions"],
    },
    {
        company: "Avannubo",
        role: "Full Stack Developer",
        period: "2022 - 2023",
        description:
            "Worked on multiple client websites and third-party projects, improving performance, maintainability and delivery speed for external clients.",
        achievements: [
            "Implemented upgrades and refactors for client projects across different web products",
            "Provided ongoing maintenance and feature development for third-party web platforms",
            "Built CRM integrations with SharePoint API and internal tooling",
            "Optimized queries, caching and frontend performance for production systems",
            "Supported product teams with scalable Laravel + Vue architecture and DX improvements",
        ],
        tech: ["Laravel", "Vue.js", "Livewire", "MySQL", "Docker"],
        icon: "/storage/images/avannubo.png",
    },
];

let revealObserver = null;

onMounted(() => {
    const revealEls = document.querySelectorAll(".museum-reveal");

    if (!("IntersectionObserver" in window)) {
        revealEls.forEach((el) => el.classList.add("is-revealed"));
        return;
    }

    revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-revealed");
                } else {
                    entry.target.classList.remove("is-revealed");
                }
            });
        },
        { threshold: 0.15, rootMargin: "0px 0px -60px 0px" },
    );

    revealEls.forEach((el) => revealObserver.observe(el));
});

onUnmounted(() => {
    revealObserver?.disconnect();
});
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap");

.museum-shell {
    --font-display: "Cormorant Garamond", Georgia, serif;
    --font-body: "Manrope", "Helvetica Neue", Arial, sans-serif;
    background:
        radial-gradient(
            circle at top left,
            rgba(78, 134, 199, 0.14),
            transparent 35%
        ),
        radial-gradient(
            circle at top right,
            rgba(138, 120, 216, 0.16),
            transparent 30%
        ),
        radial-gradient(
            circle at bottom center,
            rgba(216, 198, 122, 0.16),
            transparent 36%
        ),
        linear-gradient(180deg, #f7f2ea 0%, #f5f0e6 100%);
}

.font-display {
    font-family: var(--font-display);
    letter-spacing: -0.03em;
}

.font-body {
    font-family: var(--font-body);
}

.museum-card {
    position: relative;
    border-radius: 2rem;
    box-shadow: 0 24px 70px rgba(15, 23, 42, 0.08);
}

.museum-card-band {
    height: 0.5rem;
    background: linear-gradient(90deg, #4e86c7 0%, #d8c67a 50%, #a98ae6 100%);
}

.museum-card-band-night {
    background: linear-gradient(90deg, #243d62 0%, #4e86c7 45%, #a98ae6 100%);
}

.museum-card-band-soft {
    background: linear-gradient(
        90deg,
        rgba(78, 134, 199, 0.35) 0%,
        rgba(216, 198, 122, 0.45) 50%,
        rgba(169, 138, 230, 0.4) 100%
    );
}

.museum-card-band-blue {
    background: linear-gradient(90deg, #274a78 0%, #4e86c7 55%, #8a78d8 100%);
}

.museum-orb {
    position: absolute;
    border-radius: 9999px;
    filter: blur(72px);
    opacity: 0.35;
    animation: drift 18s ease-in-out infinite alternate;
}

.museum-orb-blue {
    top: 4rem;
    left: -5rem;
    width: 18rem;
    height: 18rem;
    background: rgba(78, 134, 199, 0.32);
}

.museum-orb-lilac {
    top: 18rem;
    right: -4rem;
    width: 20rem;
    height: 20rem;
    background: rgba(169, 138, 230, 0.24);
    animation-delay: -7s;
}

.museum-orb-gold {
    bottom: 6rem;
    left: 50%;
    width: 16rem;
    height: 16rem;
    background: rgba(216, 198, 122, 0.22);
    animation-delay: -12s;
}

.museum-pill {
    border-radius: 9999px;
    padding: 0.7rem 1rem;
    font-family: var(--font-body);
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
}

.museum-pill-blue {
    background: rgba(78, 134, 199, 0.12);
    color: #274a78;
    border: 1px solid rgba(78, 134, 199, 0.18);
}

.museum-pill-lilac {
    background: rgba(169, 138, 230, 0.12);
    color: #6f5db8;
    border: 1px solid rgba(169, 138, 230, 0.18);
}

.museum-pill-gold {
    background: rgba(216, 198, 122, 0.18);
    color: #9b7a16;
    border: 1px solid rgba(216, 198, 122, 0.3);
}

.museum-contact-link {
    display: flex;
    align-items: center;
    gap: 1rem;
    border-radius: 1.5rem;
    border: 1px solid rgba(148, 163, 184, 0.18);
    background: rgba(255, 255, 255, 0.8);
    padding: 1rem 1.1rem;
    transition:
        transform 180ms ease,
        box-shadow 180ms ease,
        border-color 180ms ease;
}

.museum-contact-link:hover {
    transform: translateY(-2px);
    box-shadow: 0 18px 30px rgba(15, 23, 42, 0.08);
    border-color: rgba(78, 134, 199, 0.24);
}

.museum-contact-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 3rem;
    width: 3rem;
    flex: 0 0 auto;
    border-radius: 1rem;
}

.museum-contact-icon-blue {
    background: linear-gradient(135deg, #274a78, #4e86c7);
}

.museum-contact-icon-lilac {
    background: linear-gradient(135deg, #8a78d8, #a98ae6);
}

.museum-button {
    border-radius: 9999px;
    padding: 0.8rem 1.2rem;
    font-family: var(--font-body);
    font-size: 0.85rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    transition:
        transform 180ms ease,
        box-shadow 180ms ease,
        opacity 180ms ease;
}

.museum-button:hover {
    transform: translateY(-1px);
    box-shadow: 0 16px 28px rgba(15, 23, 42, 0.12);
}

.museum-button-blue {
    background: linear-gradient(135deg, #274a78, #4e86c7);
    color: #fff;
}

.museum-button-slate {
    background: linear-gradient(135deg, #0f172a, #243b59);
    color: #fff;
}

.museum-button-gold {
    background: linear-gradient(135deg, #d8c67a, #c9aa4f);
    color: #24324b;
}

.museum-flow-section {
    display: grid;
    grid-template-columns: minmax(0, 1.1fr) minmax(260px, 0.9fr);
    gap: 2rem;
    align-items: start;
    padding: 0.5rem 0;
}

.museum-flow-right {
    grid-template-columns: minmax(260px, 0.9fr) minmax(0, 1.1fr);
}

.museum-flow-left .museum-flow-copy,
.museum-flow-left .museum-flow-label {
    justify-self: start;
}

.museum-flow-right .museum-flow-copy,
.museum-flow-right .museum-flow-label {
    justify-self: end;
    text-align: right;
}

.museum-flow-right .museum-flow-aside {
    order: -1;
}

.museum-flow-label {
    font-family: var(--font-body);
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.32em;
    text-transform: uppercase;
    color: #7a8596;
    padding-top: 0.4rem;
}

.museum-flow-label-light {
    color: rgba(255, 255, 255, 0.68);
}

.museum-reveal {
    opacity: 0;
    transform: translateY(36px) scale(0.985);
    filter: blur(8px);
    transition:
        opacity 1.1s cubic-bezier(0.22, 1, 0.36, 1),
        transform 1.1s cubic-bezier(0.22, 1, 0.36, 1),
        filter 1.1s cubic-bezier(0.22, 1, 0.36, 1);
    will-change: opacity, transform, filter;
}

.museum-reveal.is-revealed {
    opacity: 1;
    transform: translateY(0) scale(1);
    filter: blur(0);
}

.museum-reveal-delay-1.is-revealed {
    transition-delay: 0.16s;
}

.museum-reveal-delay-2.is-revealed {
    transition-delay: 0.4s;
}

.museum-hero-punch {
    display: inline-block;
    opacity: 0;
    animation: heroPunch 0.6s cubic-bezier(0.18, 0.9, 0.2, 1.1) 0.5s both;
}

.museum-hero-punch-delay-1 {
    animation-delay: 0.75s;
}

.museum-hero-punch-delay-2 {
    animation-delay: 1.05s;
}

.museum-hero-punch-delay-3 {
    animation-delay: 1.2s;
}

.museum-hero-punch-delay-4 {
    animation-delay: 1.35s;
}

@keyframes heroPunch {
    0% {
        opacity: 0;
        transform: scale(0.9);
    }
    30% {
        opacity: 1;
        transform: scale(1.045);
    }
    58% {
        opacity: 1;
        transform: scale(0.99);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@media (prefers-reduced-motion: reduce) {
    .museum-hero-punch {
        opacity: 1;
        animation: none;
    }
}

.museum-photo-flicker {
    opacity: 0;
}

.museum-reveal.is-revealed .museum-photo-flicker {
    animation: photoFlicker 1.1s cubic-bezier(0.4, 0, 0.2, 1) both;
}

@keyframes photoFlicker {
    0% {
        opacity: 0;
    }
    18% {
        opacity: 1;
    }
    32% {
        opacity: 0.4;
    }
    48% {
        opacity: 1;
    }
    62% {
        opacity: 0.6;
    }
    78% {
        opacity: 1;
    }
    88% {
        opacity: 0.82;
    }
    100% {
        opacity: 1;
    }
}

@media (prefers-reduced-motion: reduce) {
    .museum-photo-flicker {
        opacity: 1;
        animation: none;
    }
}

.museum-photo-quote {
    opacity: 0;
    transform: translateY(18px) scale(0.98);
    filter: blur(4px);
}

.museum-photo-quote.is-revealed {
    opacity: 1;
    transform: translateY(0) scale(1);
    filter: blur(0);
}

.museum-quote-line {
    opacity: 0;
    transform: translateY(14px) scale(0.98);
    filter: blur(4px);
    will-change: opacity, transform, filter;
}

.museum-photo-quote.is-revealed .museum-quote-line-1,
.museum-photo-quote.is-revealed .museum-quote-line-2,
.museum-photo-quote.is-revealed .museum-quote-line-3 {
    opacity: 1;
    transform: translateY(0) scale(1);
    filter: blur(0);
    animation: quoteLineFlicker 1.1s cubic-bezier(0.4, 0, 0.2, 1) both;
}

.museum-quote-line-1 {
    animation-delay: 0.08s;
}

.museum-quote-line-2 {
    animation-delay: 1.28s;
}

.museum-quote-line-3 {
    animation-delay: 2.48s;
}

@keyframes quoteLineFlicker {
    0% {
        opacity: 0;
        transform: translateY(14px) scale(0.98);
        filter: blur(4px);
    }
    18% {
        opacity: 1;
        filter: blur(0);
    }
    32% {
        opacity: 0.4;
    }
    48% {
        opacity: 1;
        transform: translateY(-2px) scale(1.02);
    }
    62% {
        opacity: 0.6;
    }
    78% {
        opacity: 1;
    }
    88% {
        opacity: 0.85;
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
        filter: blur(0);
    }
}

@media (prefers-reduced-motion: reduce) {
    .museum-reveal {
        opacity: 1;
        transform: none;
        filter: none;
        transition: none;
    }

    .museum-quote-line {
        opacity: 1;
        transform: none;
        animation: none;
    }
}

.museum-flow-copy {
    max-width: 40rem;
}

.museum-flow-dark {
    color: #fff;
    padding: 2.5rem 2rem;
    border-radius: 2rem;
    background:
        linear-gradient(135deg, rgba(16, 40, 70, 0.96), rgba(24, 57, 96, 0.92)),
        rgba(16, 40, 70, 0.96);
    box-shadow: 0 24px 70px rgba(15, 23, 42, 0.14);
}

.museum-flow-dark-compact {
    padding: 1.75rem 1.5rem;
}

.museum-flow-aside {
    min-width: 0;
}

.museum-portrait {
    width: 100%;
    max-width: 22rem;
    aspect-ratio: 1 / 1;
    border-radius: 2rem;
    object-fit: cover;
    border: 1px solid rgba(255, 255, 255, 0.8);
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.12);
}

.museum-note {
    max-width: 22rem;
    font-family: var(--font-body);
    font-size: 0.82rem;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: #7a8596;
}

.museum-link-chip {
    display: inline-flex;
    align-items: center;
    border-radius: 9999px;
    border: 1px solid rgba(148, 163, 184, 0.2);
    background: rgba(255, 255, 255, 0.72);
    padding: 0.8rem 1rem;
    font-family: var(--font-body);
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #334155;
    transition:
        transform 180ms ease,
        box-shadow 180ms ease,
        background 180ms ease;
}

.museum-link-chip:hover {
    transform: translateY(-2px);
    background: rgba(255, 255, 255, 0.95);
    box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
}

.museum-link-chip-gold {
    background: rgba(216, 198, 122, 0.22);
    border-color: rgba(216, 198, 122, 0.35);
    color: #8a6a14;
}

.museum-tech-tag,
.museum-ethic-tag {
    display: inline-flex;
    align-items: center;
    border-radius: 9999px;
    border: 1px solid rgba(255, 255, 255, 0.12);
    background: rgba(255, 255, 255, 0.08);
    padding: 0.55rem 0.8rem;
    font-family: var(--font-body);
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: inherit;
}

.museum-ethic-tag {
    border-color: rgba(148, 163, 184, 0.22);
    background: rgba(255, 255, 255, 0.76);
    color: #2f3e55;
}

.museum-ethic-tag-gold {
    background: rgba(216, 198, 122, 0.22);
    border-color: rgba(216, 198, 122, 0.35);
    color: #8a6a14;
}

.museum-tech-object {
    display: flex;
    align-items: center;
    justify-content: center;
}

.museum-tech-object-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 4.25rem;
    height: 4.25rem;
    border-radius: 1.1rem;
    background: rgba(255, 255, 255, 0.92);
    color: #102846;
    box-shadow: 0 10px 24px rgba(15, 23, 42, 0.16);
    transition: transform 180ms ease, box-shadow 180ms ease;
}

.museum-tech-object-inner:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 28px rgba(15, 23, 42, 0.18);
}

.museum-aside-grid,
.museum-flow-aside-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 1rem;
}

.museum-collage {
    display: grid;
    grid-template-columns: minmax(0, 1.4fr) minmax(260px, 1fr);
    gap: 1.5rem;
    align-items: stretch;
}

.museum-collage-column {
    display: grid;
    gap: 1.5rem;
}

.museum-collage-card {
    position: relative;
    border-radius: 1.75rem;
    background: linear-gradient(
        160deg,
        rgba(247, 250, 253, 0.95) 0%,
        rgba(252, 249, 244, 0.97) 55%,
        rgba(244, 240, 251, 0.92) 100%
    );
    border: 1px solid rgba(255, 255, 255, 0.85);
    padding: 1.6rem 1.75rem;
    box-shadow: 0 20px 45px rgba(15, 23, 42, 0.06);
    opacity: 0;
    transform: translateY(36px) scale(0.985);
    filter: blur(8px);
    transition:
        opacity 1.1s cubic-bezier(0.22, 1, 0.36, 1),
        transform 1.1s cubic-bezier(0.22, 1, 0.36, 1),
        filter 1.1s cubic-bezier(0.22, 1, 0.36, 1);
}

.museum-collage.is-revealed .museum-collage-card {
    opacity: 1;
    transform: translateY(0) scale(1);
    filter: blur(0);
}

.museum-card-delay-1 {
    transition-delay: 0.16s;
}

.museum-card-delay-2 {
    transition-delay: 0.4s;
}

.museum-card-delay-3 {
    transition-delay: 0.64s;
}

.museum-card-delay-4 {
    transition-delay: 0.88s;
}

.museum-collage-card-feature {
    padding: 2rem 2.1rem;
}

.museum-collage-card-blank {
    display: flex;
    min-height: 21rem;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(
        160deg,
        rgba(246, 242, 233, 0.96) 0%,
        rgba(250, 248, 244, 0.98) 55%,
        rgba(238, 233, 248, 0.92) 100%
    );
}

.museum-collage-card-support {
    padding: 1.35rem 1.5rem;
}

.museum-collage-accent {
    position: absolute;
    top: 0;
    left: 1.75rem;
    right: 1.75rem;
    height: 3px;
    border-radius: 9999px;
}

.museum-collage-accent-blue {
    background: linear-gradient(90deg, #274a78, #4e86c7);
}

.museum-collage-accent-lilac {
    background: linear-gradient(90deg, #8a78d8, #a98ae6);
}

.museum-collage-accent-gold {
    background: linear-gradient(90deg, #d8c67a, #c9aa4f);
}

.museum-quote-shell {
    display: flex;
    align-items: center;
    justify-content: center;
}

.museum-quote {
    max-width: 16rem;
    font-family: var(--font-display);
    font-size: 2rem;
    line-height: 1.05;
    color: #274a78;
}

@media (max-width: 1024px) {
    .museum-flow-section,
    .museum-flow-right {
        grid-template-columns: 1fr;
    }

    .museum-flow-right .museum-flow-aside {
        order: 0;
    }

    .museum-flow-right .museum-flow-copy,
    .museum-flow-right .museum-flow-label {
        justify-self: start;
        text-align: left;
    }

    .museum-collage {
        transform: none;
        width: 100%;
    }

    .museum-aside-grid,
    .museum-flow-aside-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .museum-collage {
        grid-template-columns: 1fr;
    }

    .museum-quote {
        max-width: 100%;
    }
}

@media (max-width: 768px) {
    .museum-aside-grid,
    .museum-flow-aside-grid {
        grid-template-columns: 1fr;
    }

    .museum-flow-dark {
        padding: 2rem 1.25rem;
    }

    .museum-collage-card-feature,
    .museum-collage-card-support {
        padding: 1.35rem 1.5rem;
    }

    .museum-quote {
        font-size: 1.75rem;
    }
}

@keyframes drift {
    0% {
        transform: translate3d(0, 0, 0) scale(1);
    }
    100% {
        transform: translate3d(0, -18px, 0) scale(1.06);
    }
}

@media (prefers-reduced-motion: reduce) {
    .museum-orb {
        animation: none;
    }

    .museum-contact-link,
    .museum-button,
    .museum-card,
    .museum-pill {
        transition: none;
    }
}
</style>
