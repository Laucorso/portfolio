<template>
    <div
        class="flex flex-col items-center min-h-screen relative overflow-x-hidden"
    >
        <!-- Background dinámico -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-[#4e86c7]/10 to-[#a98ae6]/10 rounded-full blur-3xl animate-pulse"
            ></div>
            <div
                class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-[#d8c67a]/10 to-[#274a78]/10 rounded-full blur-3xl animate-pulse animation-delay-1000"
            ></div>
        </div>

        <!-- Navbar editorial -->
        <nav
            class="fixed top-0 left-0 w-full z-50 backdrop-blur-xl bg-[#faf7f1]/85 border-b border-[#d9d0bf]/70 shadow-[0_10px_30px_rgba(15,23,42,0.06)]"
        >
            <div
                class="h-1 bg-gradient-to-r from-[#274a78] via-[#d8c67a] to-[#a98ae6]"
            ></div>

            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo con dirección editorial -->
                    <div
                        class="group flex items-center space-x-3 hover:scale-105 transition-all duration-300"
                    >
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#274a78] to-[#a98ae6] rounded-full blur-md opacity-35 group-hover:opacity-60 transition-opacity"
                            ></div>
                            <img
                                src="/storage/images/me.jpg"
                                class="relative w-10 h-10 rounded-full object-cover border border-white/80 shadow-lg group-hover:rotate-12 transition-transform duration-500"
                            />
                        </div>

                        <!-- Nombre con tipografía del proyecto -->
                        <div class="flex min-w-0 flex-col leading-none">
                            <span
                                class="guest-brand font-display text-lg sm:text-xl md:text-[1.55rem] lg:text-2xl text-[#223a5a] group-hover:text-[#274a78] transition-colors duration-300 whitespace-nowrap"
                            >
                                Laura Cormand
                            </span>
                            <span
                                class="hidden md:block font-body text-[8px] uppercase tracking-[0.22em] text-slate-500 leading-none"
                                >Useful systems people trust</span
                            >
                        </div>
                    </div>

                    <!-- Menú de navegación -->
                    <div
                        class="hidden md:flex items-center justify-end flex-1 gap-3 pl-8 xl:gap-4"
                    >
                        <div class="flex items-center gap-2 xl:gap-3">
                            <a
                                v-for="item in menuItems"
                                :key="item.hash"
                                :href="item.hash"
                                @click.prevent="scrollToSection(item.hash)"
                                class="group relative overflow-hidden px-4 py-2.5 rounded-full font-body text-[0.7rem] font-semibold tracking-[0.08em] uppercase text-slate-600 hover:text-slate-900 transition-all duration-300 xl:text-xs"
                                :class="[
                                    activeHash === item.hash
                                        ? 'bg-white/90 text-[#274a78] shadow-[0_10px_25px_rgba(15,23,42,0.08)] ring-1 ring-[#d9d0bf]'
                                        : 'hover:bg-white/60',
                                ]"
                            >
                                <div class="flex items-center space-x-2.5">
                                    <div
                                        class="w-2 h-2 rounded-full transition-all duration-300"
                                        :class="[
                                            activeHash === item.hash
                                                ? item.activeColor
                                                : 'bg-slate-400 group-hover:bg-slate-600',
                                        ]"
                                    ></div>
                                    <span>{{ item.text }}</span>
                                </div>

                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent opacity-0 group-hover:opacity-100 group-hover:translate-x-full transition-all duration-700 -translate-x-full rounded-full"
                                ></div>
                            </a>
                        </div>

                        <div class="flex items-center pl-2">
                            <div
                                class="inline-flex items-center gap-1 rounded-full border border-slate-200/80 bg-white/80 p-0.5 shadow-sm backdrop-blur-sm"
                            >
                                <button
                                    type="button"
                                    @click="setLocale('en')"
                                    :class="[
                                        'rounded-full px-2 py-1 text-[0.5rem] font-semibold uppercase tracking-[0.14em] transition-colors',
                                        currentLocale === 'en'
                                            ? 'bg-[#274a78] text-white'
                                            : 'text-slate-600 hover:text-slate-900',
                                    ]"
                                >
                                    EN
                                </button>
                                <button
                                    type="button"
                                    @click="setLocale('ca')"
                                    :class="[
                                        'rounded-full px-2 py-1 text-[0.5rem] font-semibold uppercase tracking-[0.14em] transition-colors',
                                        currentLocale === 'ca'
                                            ? 'bg-[#274a78] text-white'
                                            : 'text-slate-600 hover:text-slate-900',
                                    ]"
                                >
                                    CAT
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Menú móvil hamburguesa -->
                    <div class="md:hidden">
                        <button
                            @click="toggleMobileMenu"
                            class="relative flex h-11 w-11 items-center justify-center rounded-full border border-[#d9d0bf]/80 bg-white/80 shadow-[0_8px_22px_rgba(15,23,42,0.08)] backdrop-blur-md transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[0_12px_28px_rgba(39,74,120,0.12)]"
                            :class="{
                                'ring-2 ring-[#d8c67a]/60': showMobileMenu,
                            }"
                        >
                            <div
                                class="relative flex flex-col items-center gap-1.5"
                            >
                                <div
                                    class="h-[2px] w-5 rounded-full bg-[#223a5a] transition-all duration-300"
                                    :class="{
                                        'translate-y-[7px] rotate-45':
                                            showMobileMenu,
                                    }"
                                ></div>
                                <div
                                    class="h-[2px] w-5 rounded-full bg-[#223a5a] transition-all duration-300"
                                    :class="{ 'opacity-0': showMobileMenu }"
                                ></div>
                                <div
                                    class="h-[2px] w-5 rounded-full bg-[#223a5a] transition-all duration-300"
                                    :class="{
                                        '-translate-y-[7px] -rotate-45':
                                            showMobileMenu,
                                    }"
                                ></div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menú móvil desplegable -->
            <div
                class="md:hidden absolute top-full left-0 w-full border-b border-[#d9d0bf]/70 bg-[#fbf8f2]/95 shadow-[0_18px_40px_rgba(15,23,42,0.08)] backdrop-blur-xl transition-all duration-500 ease-out"
                :class="[
                    showMobileMenu
                        ? 'opacity-100 translate-y-0 pointer-events-auto'
                        : 'opacity-0 -translate-y-full pointer-events-none',
                ]"
            >
                <div class="px-4 py-4 space-y-2">
                    <a
                        v-for="item in menuItems"
                        :key="item.hash"
                        :href="item.hash"
                        @click="scrollToSection(item.hash)"
                        class="group flex items-center space-x-3 rounded-2xl border border-transparent px-4 py-3 font-body text-[0.68rem] font-semibold uppercase tracking-[0.12em] transition-all duration-300"
                        :class="[
                            activeHash === item.hash
                                ? 'border-[#d9d0bf] bg-white text-[#274a78] shadow-[0_10px_25px_rgba(15,23,42,0.08)]'
                                : 'text-slate-600 hover:border-[#d9d0bf]/80 hover:bg-white/80 hover:text-slate-900',
                        ]"
                    >
                        <div
                            class="h-2.5 w-2.5 rounded-full transition-all duration-300"
                            :class="[
                                activeHash === item.hash
                                    ? item.activeColor
                                    : 'bg-slate-400 group-hover:bg-slate-600',
                            ]"
                        ></div>
                        <span>{{ item.text }}</span>

                        <div
                            class="ml-auto transition-all duration-300"
                            :class="[
                                activeHash === item.hash
                                    ? 'translate-x-1 text-[#8a78d8]'
                                    : 'text-slate-400 group-hover:translate-x-1',
                            ]"
                        >
                            →
                        </div>
                    </a>

                    <div class="pt-2">
                        <div
                            class="inline-flex w-full items-center justify-between gap-2 rounded-2xl border border-[#d9d0bf]/80 bg-white/80 p-1 shadow-[0_8px_22px_rgba(15,23,42,0.04)]"
                        >
                            <button
                                type="button"
                                @click="setLocale('en')"
                                class="flex-1 rounded-xl px-3 py-2 text-[0.62rem] font-semibold uppercase tracking-[0.14em] transition-colors"
                                :class="
                                    currentLocale === 'en'
                                        ? 'bg-[#274a78] text-white'
                                        : 'text-slate-600 hover:text-slate-900'
                                "
                            >
                                EN
                            </button>
                            <button
                                type="button"
                                @click="setLocale('ca')"
                                class="flex-1 rounded-xl px-3 py-2 text-[0.62rem] font-semibold uppercase tracking-[0.14em] transition-colors"
                                :class="
                                    currentLocale === 'ca'
                                        ? 'bg-[#274a78] text-white'
                                        : 'text-slate-600 hover:text-slate-900'
                                "
                            >
                                CAT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <div class="w-full relative z-10">
            <slot />
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, computed } from "vue";

const showMobileMenu = ref(false);

const getStoredLocale = () => {
    if (typeof window === "undefined") return "en";
    const stored = window.localStorage.getItem("portfolio-language");
    return stored === "ca" ? "ca" : "en";
};

const currentLocale = ref(getStoredLocale());

const setLocale = (value) => {
    const next = value === "ca" ? "ca" : "en";
    currentLocale.value = next;

    if (typeof window !== "undefined") {
        window.localStorage.setItem("portfolio-language", next);
        window.dispatchEvent(
            new CustomEvent("portfolio-language-change", {
                detail: { locale: next },
            }),
        );
    }
};

const syncLocale = () => {
    currentLocale.value = getStoredLocale();
};

const activeHash = ref(window.location.hash || "#contact");
const NAV_OFFSET = ref(64);

const measureNav = () => {
    NAV_OFFSET.value = document.querySelector("nav")?.offsetHeight || 64;
};

const menuItems = computed(() => {
    const labels =
        currentLocale.value === "ca"
            ? {
                  contact: "Contacte",
                  tech: "Tecnologies",
                  projects: "Projectes",
                  about: "Sobre mi",
              }
            : {
                  contact: "Contact",
                  tech: "Technologies",
                  projects: "Projects",
                  about: "About",
              };

    return [
        {
            hash: "#contact",
            text: labels.contact,
            activeColor: "bg-gradient-to-r from-[#274a78] to-[#4e86c7]",
        },
        {
            hash: "#projects",
            text: labels.projects,
            activeColor: "bg-gradient-to-r from-[#d8c67a] to-[#c9aa4f]",
        },
        {
            hash: "#tech",
            text: labels.tech,
            activeColor: "bg-gradient-to-r from-[#4e86c7] to-[#a98ae6]",
        },
        {
            hash: "#about",
            text: labels.about,
            activeColor: "bg-gradient-to-r from-[#8a78d8] to-[#a98ae6]",
        },
    ];
});

const setActive = (hash) => {
    activeHash.value = hash;
};

const isAutoScrolling = ref(false);

const scrollToSection = (hash) => {
    const el = document.querySelector(hash);
    if (!el) return;

    setActive(hash);
    showMobileMenu.value = false;

    const top =
        window.scrollY +
        el.getBoundingClientRect().top -
        (NAV_OFFSET.value + 8);
    isAutoScrolling.value = true;
    window.scrollTo({ top, behavior: "smooth" });

    // Actualiza URL sin disparar hashchange
    history.pushState(null, "", hash);

    // Fin del scroll programático
    const end = () => {
        isAutoScrolling.value = false;
        handleScroll();
        window.removeEventListener("scrollend", end);
    };
    if ("onscrollend" in window) {
        window.addEventListener("scrollend", end, { once: true });
    } else {
        setTimeout(end, 500);
    }
};

const toggleMobileMenu = () => {
    showMobileMenu.value = !showMobileMenu.value;
};

// Cerrar menú móvil al hacer clic fuera
const handleClickOutside = (event) => {
    if (showMobileMenu.value && !event.target.closest("nav")) {
        showMobileMenu.value = false;
    }
};

onMounted(() => {
    measureNav();
    syncLocale();

    const onLocaleChange = (event) => {
        const next = event.detail?.locale ?? getStoredLocale();
        currentLocale.value = next === "ca" ? "ca" : "en";
    };

    window.addEventListener("resize", measureNav);
    window.addEventListener("portfolio-language-change", onLocaleChange);
    window.addEventListener("storage", syncLocale);

    const handleScroll = () => {
        if (isAutoScrolling.value) return;

        const viewportAnchor = window.scrollY + NAV_OFFSET.value + 8;
        const defs = menuItems.value
            .map((i) => ({ hash: i.hash, el: document.querySelector(i.hash) }))
            .filter((s) => !!s.el)
            .sort((a, b) => {
                const topA = window.scrollY + a.el.getBoundingClientRect().top;
                const topB = window.scrollY + b.el.getBoundingClientRect().top;
                return topA - topB;
            });

        if (!defs.length) return;

        let current = defs[0].hash;
        for (const s of defs) {
            const sectionTop =
                window.scrollY + s.el.getBoundingClientRect().top;
            if (sectionTop <= viewportAnchor) current = s.hash;
            else break;
        }
        if (current !== activeHash.value) activeHash.value = current;
    };

    window.addEventListener("scroll", handleScroll, { passive: true });

    const onHashChange = () => {
        activeHash.value = window.location.hash || "#contact";
        showMobileMenu.value = false;
    };
    window.addEventListener("hashchange", onHashChange);

    document.addEventListener("click", handleClickOutside);

    handleScroll();

    return () => {
        window.removeEventListener("resize", measureNav);
        window.removeEventListener("portfolio-language-change", onLocaleChange);
        window.removeEventListener("storage", syncLocale);
        window.removeEventListener("scroll", handleScroll);
        window.removeEventListener("hashchange", onHashChange);
        document.removeEventListener("click", handleClickOutside);
    };
});
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap");

nav,
.guest-brand,
.font-display,
.font-body {
    --font-display: "Cormorant Garamond", Georgia, serif;
    --font-body: "Manrope", "Helvetica Neue", Arial, sans-serif;
}

.font-display {
    font-family: var(--font-display);
    letter-spacing: -0.03em;
}

.font-body {
    font-family: var(--font-body);
}

/* Animaciones personalizadas */
@keyframes float {
    0%,
    100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

/* Efectos de glassmorphism mejorados */
nav {
    backdrop-filter: blur(20px) saturate(180%);
    -webkit-backdrop-filter: blur(20px) saturate(180%);
}

/* Transiciones suaves para móvil */
@media (max-width: 768px) {
    .group:active {
        transform: scale(0.98);
    }
}
</style>
