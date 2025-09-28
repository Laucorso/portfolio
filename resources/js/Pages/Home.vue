<template>
  <GuestLayout>
    <Head title="Laura Cormand" />

    <!-- Background dinámico con burbujas flotantes -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
      <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full blur-3xl animate-pulse"></div>
      <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-blue-400/20 to-cyan-400/20 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-yellow-400/10 to-orange-400/10 rounded-full blur-2xl animate-pulse animation-delay-2000"></div>
    </div>

    <div class="py-20 relative z-10">
      <div class="max-w-7xl mx-auto px-6">
        <!-- Header Hero Section -->
        <div class="mb-20">
          <div class="text-center mb-16">
            <div class="relative inline-block">
              <h1 class="text-8xl md:text-7xl font-black bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent animate-gradient-x">
                Full Stack
              </h1>
              <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-pink-600 rounded-lg blur opacity-25 animate-pulse"></div>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold text-gray-800 mt-4">Developer</h2>
            <div class="w-32 h-1 bg-gradient-to-r from-pink-500 to-violet-500 mx-auto mt-8 rounded-full"></div>
          </div>
        </div>

        <!-- Grid principal con layout moderno -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
          
          <!-- Sección de contacto - Glassmorphism -->
          <section id="contact" class="lg:col-span-5 group">
            <div class="h-full bg-gradient-to-br from-white/80 to-white/40 backdrop-blur-xl border border-white/20 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 hover:scale-105 hover:rotate-1">
              
              <!-- Avatar con efectos -->
              <div class="flex justify-center mb-8">
                <div class="relative">
                  <div class="absolute inset-0 bg-gradient-to-r from-pink-400 to-violet-400 rounded-full blur-lg opacity-75 animate-pulse"></div>
                  <img 
                    src="/storage/images/me.jpg" 
                    class="relative w-40 h-40 rounded-full object-cover border-4 border-white/50 shadow-xl hover:scale-110 transition-transform duration-700 hover:rotate-12" 
                  />
                  <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-green-400 rounded-full border-4 border-white flex items-center justify-center animate-bounce">
                    <span class="text-white text-xl">👋</span>
                  </div>
                </div>
              </div>

              <h2 class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 mb-6 text-center">
                Improving with enthusiasm.
              </h2>

              <p class="mb-4">
                Open to getting involved in innovative projects and being part of teams that strive to take digital a step further.
              </p>

              <!-- Información de contacto con micro-animaciones -->
              <div class="space-y-6">
                <div class="group/item">
                  <a href="https://wa.me/34655443754" target="_blank" 
                     class="flex items-center gap-4 p-4 rounded-2xl bg-gradient-to-r from-green-50 to-emerald-50 hover:from-green-100 hover:to-emerald-100 border border-green-200/50 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-emerald-400 rounded-xl flex items-center justify-center group-hover/item:rotate-12 transition-transform">
                      <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.525 3.687z"/>
                      </svg>
                    </div>
                    <div>
                      <p class="font-bold text-gray-800">WhatsApp</p>
                      <p class="text-gray-600">+34 655 443 754</p>
                    </div>
                  </a>
                </div>

                <div class="group/item">
                  <a href="mailto:laucorrs@gmail.com" 
                     class="flex items-center gap-4 p-4 rounded-2xl bg-gradient-to-r from-blue-50 to-indigo-50 hover:from-blue-100 hover:to-indigo-100 border border-blue-200/50 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-400 to-indigo-400 rounded-xl flex items-center justify-center group-hover/item:rotate-12 transition-transform">
                      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                      </svg>
                    </div>
                    <div>
                      <p class="font-bold text-gray-800">Email</p>
                      <p class="text-gray-600">laucorrs@gmail.com</p>
                    </div>
                  </a>
                </div>
              </div>

              <!-- Links sociales modernos -->
              <div class="mt-8 flex flex-wrap gap-3 justify-center">
                <a href="https://www.linkedin.com/in/tuusuario" target="_blank" 
                   class="group/social flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-full hover:from-blue-700 hover:to-blue-800 transition-all duration-300 hover:scale-110 hover:shadow-xl">
                  <svg class="w-5 h-5 group-hover/social:rotate-12 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                  </svg>
                  <span class="font-semibold">LinkedIn</span>
                </a>

                <a href="https://github.com/Laucorso" target="_blank" 
                   class="group/social flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-gray-800 to-gray-900 text-white rounded-full hover:from-gray-900 hover:to-black transition-all duration-300 hover:scale-110 hover:shadow-xl">
                  <svg class="w-5 h-5 group-hover/social:rotate-12 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                  </svg>
                  <span class="font-semibold">GitHub</span>
                </a>

                <a href="/docs/CV-LauraCormand.pdf" target="_blank" 
                   class="group/social flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-full hover:from-purple-700 hover:to-pink-700 transition-all duration-300 hover:scale-110 hover:shadow-xl">
                  <svg class="w-5 h-5 group-hover/social:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                  </svg>
                  <span class="font-semibold">CV</span>
                </a>
              </div>
            </div>
          </section>

          <!-- Sección de tecnologías moderna -->
          <section id="tech" class="lg:col-span-7">
            <div class="bg-gradient-to-br from-gray-900/95 to-black/95 backdrop-blur-xl border border-gray-700/50 rounded-3xl p-8 shadow-2xl h-full">
              <div class="text-center mb-8">
                <h2 class="text-4xl font-black bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent mb-4">
                  Tech Stack
                </h2>
                <p class="text-gray-400">Tools I work with on a daily basis</p>
                <div class="w-20 h-1 bg-gradient-to-r from-yellow-400 to-orange-400 mx-auto mt-4 rounded-full"></div>
              </div>

              <!-- Grid de tecnologías con animaciones -->
              <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div v-for="(tech, index) in technologies" :key="index"
                     class="group relative overflow-hidden"
                     :style="{ animationDelay: `${index * 100}ms` }">
                  <div class="bg-gradient-to-br from-gray-800/50 to-gray-900/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl p-6 hover:from-gray-700/50 hover:to-gray-800/50 transition-all duration-500 hover:scale-105 hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Efecto de brillo que pasa por encima -->
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 group-hover:translate-x-full transition-all duration-1000 -translate-x-full"></div>
                    
                    <div class="relative z-10 text-center">
                      <!-- SVG inline -->
                      <div v-if="tech.type === 'svg'" v-html="tech.icon"
                          class="w-16 h-16 mx-auto mb-4 rounded-2xl flex items-center justify-center group-hover:rotate-12 group-hover:scale-110 transition-transform duration-500 shadow-lg">
                      </div>

                      <!-- Imagen -->
                      <img v-else :src="tech.icon" :alt="tech.name"
                          class="w-16 h-16 mx-auto mb-4 rounded-2xl flex items-center justify-center object-contain group-hover:rotate-12 group-hover:scale-110 transition-transform duration-500 shadow-lg" />

                      <h3 class="text-lg font-bold text-yellow-400 group-hover:text-yellow-300 transition-colors">
                        {{ tech.name }}
                      </h3>
                      <div class="w-0 h-0.5 bg-gradient-to-r from-yellow-400 to-orange-400 mx-auto mt-2 group-hover:w-full transition-all duration-500"></div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="projects" class="lg:col-span-12 mt-12">
            <div class="relative overflow-hidden bg-gradient-to-br from-indigo-50 via-white to-purple-50 rounded-3xl p-6 md:p-12 shadow-2xl border border-white/50">
                <!-- Background suave -->
                <div class="absolute inset-0 pointer-events-none overflow-hidden">
                    <!-- Glow arriba izquierda -->
                    <div class="absolute -top-32 -left-32 w-96 h-96 bg-gradient-to-br from-indigo-400/20 to-purple-400/10 rounded-full blur-4xl"></div>
                    <!-- Glow abajo derecha -->
                    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-gradient-to-tr from-pink-400/20 to-purple-400/10 rounded-full blur-4xl"></div>
                </div>

                <div class="relative z-10 max-w-6xl mx-auto">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-center bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-8 md:mb-12">
                        Profesional Experiences
                    </h2>

                    <div class="relative">
                        <!-- Línea del timeline - Oculta en mobile, visible en desktop -->
                        <div class="hidden md:block absolute left-1/2 -translate-x-1/2 h-full w-1 bg-gradient-to-b from-indigo-400 via-purple-400 to-pink-400 rounded-full opacity-60"></div>

                        <!-- Timeline items -->
                        <div class="space-y-8 md:space-y-12">
                            <div v-for="(exp, index) in experiences" :key="index" class="relative">
                                <!-- Dot para desktop -->
                                <div class="hidden md:block absolute left-1/2 -translate-x-1/2 -top-1">
                                    <span class="relative block w-4 h-4 rounded-full bg-white ring-4 ring-indigo-200 shadow-lg">
                                        <span class="pointer-events-none absolute -inset-1 rounded-full bg-gradient-to-r from-indigo-500 to-pink-500 opacity-50 blur-sm"></span>
                                        <span class="pointer-events-none absolute inset-0 rounded-full bg-gradient-to-r from-indigo-500 to-pink-500 animate-ping opacity-40"></span>
                                    </span>
                                </div>

                                <!-- Mobile: Stack layout -->
                                <div class="md:hidden">
                                    <!-- Header info -->
                                    <div class="flex items-center gap-3 mb-4">
                                        <img :src="exp.icon" :alt="exp.company" 
                                              class="w-12 h-12 rounded-xl bg-white/80 border border-white/60 shadow" />
                                        <div>
                                            <h3 class="text-lg font-bold text-gray-900">{{ exp.role }}</h3>
                                            <p class="text-sm text-gray-600">{{ exp.company }}</p>
                                            <div class="text-xs font-medium text-indigo-600 bg-indigo-50 px-2 py-1 rounded-full inline-block mt-1">
                                                {{ exp.period }}
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content card -->
                                    <div class="bg-white/80 backdrop-blur-sm border border-white/60 rounded-2xl p-5 shadow-lg">
                                        <p class="text-gray-700 leading-relaxed mb-4">
                                            {{ exp.description }}
                                        </p>

                                        <ul class="text-gray-700 space-y-2 mb-4 text-sm">
                                            <li v-for="(item, i) in exp.achievements" :key="i" class="flex items-start gap-2">
                                                <span class="mt-2 inline-block w-1.5 h-1.5 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 flex-shrink-0"></span>
                                                <span>{{ item }}</span>
                                            </li>
                                        </ul>

                                        <!-- Tech chips -->
                                        <div class="flex flex-wrap gap-1.5">
                                            <span v-for="(t, j) in exp.tech" :key="j"
                                                  class="px-2.5 py-1 rounded-full text-xs font-medium text-indigo-800 bg-gradient-to-r from-indigo-100 to-purple-100 border border-indigo-200">
                                                {{ t }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Desktop: Two column layout -->
                                <div class="hidden md:grid grid-cols-2 gap-8 items-start">
                                    <!-- Columna izquierda/derecha alternante -->
                                    <div class="text-right pr-10" :class="index % 2 === 1 ? 'order-2 text-left pl-10 pr-0' : ''">
                                        <div class="inline-flex items-center gap-3">
                                            <img :src="exp.icon" :alt="exp.company" 
                                                  class="w-10 h-10 rounded-xl bg-white/80 border border-white/60 shadow" />
                                            <div class="text-sm font-semibold text-gray-500">{{ exp.period }}</div>
                                        </div>
                                        <h3 class="mt-3 text-2xl font-bold text-gray-900">{{ exp.role }}</h3>
                                        <p class="text-gray-600">{{ exp.company }}</p>
                                    </div>

                                    <!-- Content card -->
                                    <div class="bg-white/70 backdrop-blur-xl border border-white/60 rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-500"
                                          :class="index % 2 === 1 ? 'order-1' : ''">
                                        <p class="text-gray-700 leading-relaxed mb-4">
                                            {{ exp.description }}
                                        </p>

                                        <ul class="text-gray-700 space-y-2 mb-5">
                                            <li v-for="(item, i) in exp.achievements" :key="i" class="flex items-start gap-2">
                                                <span class="mt-2 inline-block w-1.5 h-1.5 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500"></span>
                                                <span>{{ item }}</span>
                                            </li>
                                        </ul>

                                        <!-- Tech chips -->
                                        <div class="flex flex-wrap gap-2">
                                            <span v-for="(t, j) in exp.tech" :key="j"
                                                  class="px-3 py-1.5 rounded-full text-sm font-semibold text-indigo-800 bg-gradient-to-r from-indigo-100 to-purple-100 border border-indigo-200 hover:scale-105 transition-transform">
                                                {{ t }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer disclaimer -->
                        <div class="mt-8 md:mt-12 text-center">
                            <div class="inline-flex items-center gap-2 px-4 md:px-6 py-2 md:py-3 bg-white/60 backdrop-blur-lg border border-white/40 rounded-full shadow-lg">
                                <div class="w-2 h-2 rounded-full bg-gradient-to-r from-indigo-400 to-purple-400"></div>
                                <p class="text-xs text-gray-600 font-medium">
                                    Los logos mostrados pertenecen a sus respectivas marcas y se utilizan únicamente con fines descriptivos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="lg:col-span-12 mt-12">
          <div class="relative overflow-hidden bg-gradient-to-br from-indigo-50 via-white to-purple-50 rounded-3xl p-12 shadow-2xl border border-white/50">
            <!-- Background patterns -->
            <div class="absolute inset-0 opacity-5">
              <div class="absolute top-10 left-10 w-32 h-32 bg-indigo-500 rounded-full blur-3xl"></div>
              <div class="absolute bottom-10 right-10 w-32 h-32 bg-purple-500 rounded-full blur-3xl"></div>
              <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-pink-500 rounded-full blur-3xl"></div>
            </div>

            <div class="relative z-10 max-w-4xl mx-auto text-center">
              <h2 class="text-5xl font-black bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-8">
                My Story
              </h2>
              
              <div class="space-y-8 text-lg leading-relaxed">
                <p class="text-gray-700">
                  <span class="inline-block w-16 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mr-4 align-middle rounded-full"></span>
                  My journey began in the classrooms of <span class="font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Philosophy</span> at the University of Barcelona, where I learned to <span class="italic">unravel complexity</span> and see the world from multiple perspectives.
                </p>
                
                <p class="text-gray-700">
                  <span class="inline-block w-16 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mr-4 align-middle rounded-full"></span>
                  Curiosity led me to the fascinating world of <span class="font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">technology</span>, where I discovered that programming is like philosophizing: it’s about <span class="italic">building worlds from pure logic</span>.
                </p>
                
                <p class="text-gray-700">
                  <span class="inline-block w-16 h-1 bg-gradient-to-r from-pink-500 to-orange-500 mr-4 align-middle rounded-full"></span>
                  Today I merge both worlds: the <span class="font-bold">depth of critical thinking</span> with the <span class="font-bold">agility of digital solutions</span>, creating experiences that not only work but also <span class="italic bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">transcend</span>.
                </p>
              </div>

              <div class="mt-12 flex flex-wrap justify-center gap-4">
                <span class="px-6 py-3 bg-gradient-to-r from-indigo-100 to-purple-100 border border-indigo-200 rounded-full text-indigo-800 font-semibold hover:scale-105 transition-transform">
                  🧠 Critical Thinking
                </span>
                <span class="px-6 py-3 bg-gradient-to-r from-purple-100 to-pink-100 border border-purple-200 rounded-full text-purple-800 font-semibold hover:scale-105 transition-transform">
                  💡 Technical Creativity
                </span>
                <span class="px-6 py-3 bg-gradient-to-r from-pink-100 to-orange-100 border border-pink-200 rounded-full text-pink-800 font-semibold hover:scale-105 transition-transform">
                  🚀 Constant Innovation
                </span>
              </div>
            </div>
          </div>
        </section>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head } from '@inertiajs/vue3'

const technologies = ref([
  { 
    name: 'Laravel', 
    icon: `<svg aria-hidden="true" role="img" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg"><title>Laravel</title><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></svg>`,
    bgColor: 'bg-gradient-to-br from-red-500 to-red-600',
    type: 'svg'
  },
  { 
    name: 'Vue.js', 
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 261.76 226.69"><path fill="#41B883" d="M0 0h65.4l65.5 113.4L196.3 0h65.4L130.9 226.7z"/><path fill="#34495E" d="M65.4 0h65.4l-65.4 113.4L0 0z"/></svg>`, 
    bgColor: 'bg-gradient-to-br from-green-500 to-emerald-600',
    type: 'svg'
  },
  { 
    name: 'Tailwind', 
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path fill="#38BDF8" d="M24 9c-6 0-10 3-12 9 2-3 4.667-4.5 8-4.5 3.6 0 6.2 1.8 7.8 5.4 1.2 2.4 3 3.6 5.4 3.6 4.8 0 7.8-2.4 9-7.2-2 3-4.7 4.5-8 4.5-3.6 0-6.2-1.8-7.8-5.4C25.2 10.2 23.4 9 21 9zM12 24c-6 0-10 3-12 9 2-3 4.7-4.5 8-4.5 3.6 0 6.2 1.8 7.8 5.4 1.2 2.4 3 3.6 5.4 3.6 4.8 0 7.8-2.4 9-7.2-2 3-4.7 4.5-8 4.5-3.6 0-6.2-1.8-7.8-5.4C13.2 25.2 11.4 24 9 24z"/></svg>`, 
    bgColor: 'bg-gradient-to-br from-blue-500 to-cyan-600',
    type: 'svg'
  },
  { 
    name: 'MySQL', 
    icon: '/storage/images/mysql.png', 
    bgColor: 'bg-gradient-to-br from-orange-500 to-amber-600',
    type: 'img',
  },
  { 
    name: 'PostgreSQL', 
    icon: '/storage/images/postgr.png', 
    bgColor: 'bg-gradient-to-br from-blue-600 to-indigo-600',
    type: 'img'
  },
  { 
    name: 'Docker', 
    icon: '/storage/images/docker.png', 
    bgColor: 'bg-gradient-to-br from-blue-400 to-sky-500',
    type: 'img'
  },
  { 
    name: 'AWS', 
    icon: '/storage/images/aws.png', 
    bgColor: 'bg-gradient-to-br from-yellow-500 to-orange-500',
    type: 'img',
  },
  { 
    name: 'JIRA', 
    icon: '/storage/images/jira.png', 
    bgColor: 'bg-gradient-to-br from-blue-700 to-indigo-700',
    type: 'img',
  },
  { 
    name: 'Figma', 
    icon: 'storage/images/figma-bo.png', 
    bgColor: 'bg-gradient-to-br from-purple-500 to-violet-600',
    type: 'img',
  },
])

const techMap = computed(() => {
  const map = {}
  technologies.value.forEach(t => { map[t.name] = t })
  return map
})

const experiences = ref([
  {
    company: 'Trioteca',
    icon: '/storage/images/trioteca.png',
    role: 'Full Stack Developer',
    period: '2025 - Present',
    description: 'Web development, user area + corporate CRM development',
    achievements: [
      'Implemented new features in the user area -> users can independently send leads to banks to apply for a mortgage',
      'Automated client notifications via email and WhatsApp',
      'Developed online appraisal module',
      'Built data extraction from ID cards and payslips using OCR Textract / Gemini AI',
      'Frontend development with close collaboration with designers',
      'Developed front-agnostic project for new website -> Serverless framework + Nuxt.js'
    ],
    tech: ['Laravel', 'Vue.js', 'Laravel Nova', 'AI', 'AWS']
  },
  {
    company: 'Clicktotravel',
    icon: '/storage/images/clicktotravel.png',
    role: 'Backend Developer',
    period: '2023 – 2024',
    description: 'Custom CMS development for hotel management with SEO focus.',
    achievements: [
      'Implemented CMS in Laravel 10 with roles and permissions (Spatie)',
      'Automated sitemap generation with cronjobs',
      'Integrated BunnyCDN for content optimization',
      'Integrated ChatGPT AI for hotel offers functionality'
    ],
    tech: ['Laravel', 'MySQL', 'BunnyCDN', 'Spatie Roles/Permissions']
  },
  {
    company: 'Avannubo',
    role: 'Full Stack Developer',
    period: '2022 - 2023',
    description: 'Development and enhancement of core functionalities in a Laravel + Vue environment with focus on performance and DX.',
    achievements: [
      'Migration and standardization to Laravel 10 and Vite',
      'Development and maintenance of third-party projects, mainly CRMs',
      'Developed CRM integrated with SharePoint API',
      'Developed internal ticketing functionality for company use',
      'Query and cache optimization',
    ],
    tech: ['Laravel', 'Vue.js', 'Livewire', 'MySQL', 'Docker'],
    icon: '/storage/images/avannubo.png'
  }
])

onMounted(() => {
  // Animación de gradiente en movimiento para el título
  const style = document.createElement('style')
  style.textContent = `
    @keyframes gradient-x {
      0%, 100% {
        background-size: 200% 200%;
        background-position: left center;
      }
      50% {
        background-size: 200% 200%;
        background-position: right center;
      }
    }
    .animate-gradient-x {
      animation: gradient-x 4s ease infinite;
    }
    .animation-delay-1000 {
      animation-delay: 1s;
    }
    .animation-delay-2000 {
      animation-delay: 2s;
    }
  `
  document.head.appendChild(style)
})
</script>

<style>
/* Efectos adicionales de glassmorphism y animaciones */
.backdrop-blur-xl {
  backdrop-filter: blur(16px);
}

.shadow-3xl {
  box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

/* Animación de entrada escalonada para las tecnologías */
@media (prefers-reduced-motion: no-preference) {
  .grid > div {
    animation: slideInUp 0.6s ease-out forwards;
    opacity: 0;
    transform: translateY(30px);
  }
  
  @keyframes slideInUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
}

/* Mejoras en los hovers y transiciones */
@media (hover: hover) {
  .group:hover .group-hover\:rotate-12 {
    transform: rotate(12deg);
  }
  
  .group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
  }
}
</style>
