<template>
  <div class="flex flex-col items-center min-h-screen relative overflow-x-hidden">
    <!-- Background dinámico -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
      <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-purple-400/10 to-pink-400/10 rounded-full blur-3xl animate-pulse"></div>
      <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-blue-400/10 to-cyan-400/10 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
    </div>

    <!-- Navbar moderno con glassmorphism -->
    <nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-xl bg-white/70 border-b border-white/20 shadow-lg">
      <!-- Barra de gradiente superior -->
      <div class="h-1 bg-gradient-to-r from-indigo-500 via-pink-500 to-orange-500"></div>
      
      <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">
          
          <!-- Logo con efectos modernos -->
          <div class="group flex items-center space-x-3 hover:scale-105 transition-all duration-300">
            <!-- Avatar con efectos -->
            <div class="relative">
              <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-md opacity-50 group-hover:opacity-75 transition-opacity"></div>
              <img 
                src="/storage/images/me.jpg" 
                class="relative w-10 h-10 rounded-full object-cover border-2 border-white/50 shadow-lg group-hover:rotate-12 transition-transform duration-500" 
              />
            </div>
            
            <!-- Nombre con gradiente -->
            <div class="flex flex-col">
              <span class="text-xl font-black bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent group-hover:from-purple-600 group-hover:to-pink-600 transition-all duration-300">
                Laura Cormand
              </span>
              <span class="text-xs text-gray-500 font-medium">Full Stack Developer</span>
            </div>
          </div>

          <!-- Menú de navegación moderno -->
          <div class="hidden md:flex items-center space-x-2">
            <a 
              v-for="item in menuItems" 
              :key="item.hash"
              :href="item.hash" 
              @click.prevent="scrollToSection(item.hash)"
              class="group relative overflow-hidden px-6 py-2 rounded-full font-semibold text-gray-700 hover:text-gray-900 transition-all duration-300"
              :class="[
                activeHash === item.hash 
                  ? 'bg-gradient-to-r from-purple-100 to-pink-100 text-purple-700 shadow-md' 
                  : 'hover:bg-white/50'
              ]"
            >
              <!-- Icono del menú -->
              <div class="flex items-center space-x-2">
                <div 
                  class="w-2 h-2 rounded-full transition-all duration-300"
                  :class="[
                    activeHash === item.hash 
                      ? item.activeColor
                      : 'bg-gray-400 group-hover:bg-gray-600'
                  ]"
                ></div>
                <span>{{ item.text }}</span>
              </div>
              
              <!-- Efecto de brillo en hover -->
              <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 group-hover:opacity-100 group-hover:translate-x-full transition-all duration-700 -translate-x-full rounded-full"></div>
              
            </a>
          </div>

          <!-- Menú móvil hamburguesa -->
          <div class="md:hidden">
            <button 
              @click="toggleMobileMenu"
              class="relative w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110"
              :class="{ 'rotate-90': showMobileMenu }"
            >
              <div class="space-y-1">
                <div 
                  class="w-5 h-0.5 bg-white rounded-full transition-all duration-300"
                  :class="{ 'rotate-45 translate-y-1.5': showMobileMenu }"
                ></div>
                <div 
                  class="w-5 h-0.5 bg-white rounded-full transition-all duration-300"
                  :class="{ 'opacity-0': showMobileMenu }"
                ></div>
                <div 
                  class="w-5 h-0.5 bg-white rounded-full transition-all duration-300"
                  :class="{ '-rotate-45 -translate-y-1.5': showMobileMenu }"
                ></div>
              </div>
            </button>
          </div>
        </div>
      </div>

      <!-- Menú móvil desplegable -->
      <div 
        class="md:hidden absolute top-full left-0 w-full backdrop-blur-xl bg-white border-b border-white/20 shadow-xl transition-all duration-500 ease-out"
        :class="[
          showMobileMenu 
            ? 'opacity-100 translate-y-0 pointer-events-auto' 
            : 'opacity-0 -translate-y-full pointer-events-none'
        ]"
      >
        <div class="px-6 py-4 space-y-2">
          <a 
            v-for="item in menuItems" 
            :key="item.hash"
            :href="item.hash" 
            @click="scrollToSection(item.hash)"
            class="group flex items-center space-x-3 px-4 py-3 rounded-2xl font-semibold transition-all duration-300"
            :class="[
              activeHash === item.hash 
                ? 'bg-gradient-to-r from-purple-100 to-pink-100 text-purple-700 shadow-md' 
                : 'text-gray-700 hover:bg-white/70 hover:text-gray-900'
            ]"
          >
            <div 
              class="w-3 h-3 rounded-full transition-all duration-300"
              :class="[
                activeHash === item.hash 
                  ? item.activeColor
                  : 'bg-gray-400 group-hover:bg-gray-600'
              ]"
            ></div>
            <span>{{ item.text }}</span>
            
            <!-- Flecha indicadora -->
            <div 
              class="ml-auto transition-all duration-300"
              :class="[
                activeHash === item.hash 
                  ? 'text-purple-500 translate-x-1' 
                  : 'text-gray-400 group-hover:translate-x-1'
              ]"
            >
              →
            </div>
          </a>
        </div>
      </div>
    </nav>

    <!-- Contenido principal -->
    <div class="pt-20 w-full relative z-10">
      <slot />
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue'

const showMobileMenu = ref(false)

const activeHash = ref(window.location.hash || '#contact')
const NAV_OFFSET = ref(64)

const measureNav = () => {
  NAV_OFFSET.value = (document.querySelector('nav')?.offsetHeight || 64)
}

// Items del menú con colores personalizados
const menuItems = ref([
  { 
    hash: '#contact', 
    text: 'Contacto', 
    activeColor: 'bg-gradient-to-r from-green-400 to-emerald-500' 
  },
  { 
    hash: '#tech', 
    text: 'Tecnologías', 
    activeColor: 'bg-gradient-to-r from-blue-400 to-cyan-500' 
  },
  { 
    hash: '#about', 
    text: 'Sobre mí', 
    activeColor: 'bg-gradient-to-r from-purple-400 to-pink-500' 
  },
  { 
    hash: '#projects', 
    text: 'Proyectos', 
    activeColor: 'bg-gradient-to-r from-orange-400 to-red-500' 
  }
])

const setActive = (hash) => {
  activeHash.value = hash
}

const isAutoScrolling = ref(false)

const scrollToSection = (hash) => {
  const el = document.querySelector(hash)
  if (!el) return

  setActive(hash)
  showMobileMenu.value = false

  const top = window.scrollY + el.getBoundingClientRect().top - (NAV_OFFSET.value + 8)
  isAutoScrolling.value = true
  window.scrollTo({ top, behavior: 'smooth' })

  // Actualiza URL sin disparar hashchange
  history.pushState(null, '', hash)

  // Fin del scroll programático
  const end = () => {
    isAutoScrolling.value = false
    handleScroll()
    window.removeEventListener('scrollend', end)
  }
  if ('onscrollend' in window) {
    window.addEventListener('scrollend', end, { once: true })
  } else {
    setTimeout(end, 500)
  }
}

const toggleMobileMenu = () => {
  showMobileMenu.value = !showMobileMenu.value
}

// Cerrar menú móvil al hacer clic fuera
const handleClickOutside = (event) => {
  if (showMobileMenu.value && !event.target.closest('nav')) {
    showMobileMenu.value = false
  }
}

onMounted(() => {
  measureNav()
  window.addEventListener('resize', measureNav)

  const handleScroll = () => {
    if (isAutoScrolling.value) return

    const viewportAnchor = window.scrollY + NAV_OFFSET.value + 8
    const defs = menuItems.value
      .map(i => ({ hash: i.hash, el: document.querySelector(i.hash) }))
      .filter(s => !!s.el)
      .sort((a, b) => {
        const topA = window.scrollY + a.el.getBoundingClientRect().top
        const topB = window.scrollY + b.el.getBoundingClientRect().top
        return topA - topB
      })

    if (!defs.length) return

    let current = defs[0].hash
    for (const s of defs) {
      const sectionTop = window.scrollY + s.el.getBoundingClientRect().top
      if (sectionTop <= viewportAnchor) current = s.hash
      else break
    }
    if (current !== activeHash.value) activeHash.value = current
  }

  window.addEventListener('scroll', handleScroll, { passive: true })

  const onHashChange = () => {
    activeHash.value = window.location.hash || '#contact'
    showMobileMenu.value = false
  }
  window.addEventListener('hashchange', onHashChange)

  document.addEventListener('click', handleClickOutside)

  handleScroll()

  return () => {
    window.removeEventListener('resize', measureNav)
    window.removeEventListener('scroll', handleScroll)
    window.removeEventListener('hashchange', onHashChange)
    document.removeEventListener('click', handleClickOutside)
  }
})
</script>

<style scoped>
/* Animaciones personalizadas */
@keyframes float {
  0%, 100% {
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