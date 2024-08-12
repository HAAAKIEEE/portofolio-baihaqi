<x-layout>
    
    <x-slot:title>{{ $title }}</x-slot:title>
   {{-- hero --}}
   <section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 md:grid-cols-12">
        <!-- Bagian teks dan tombol -->
        <div class="lg:col-span-7 md:col-span-7 flex flex-col justify-center order-2 lg:order-1">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                Hello Nama Saya Baihaqi
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                I'm a mobile and web developer passionate about creating seamless digital experiences. I bring ideas to life with innovative, high-quality apps and websites. Let’s build something great together!
            </p>
            <a href="https://www.instagram.com/haqi.cn/" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                More Info
            </a> 
        </div>
        <!-- Bagian gambar -->
        <div class="lg:col-span-5 md:col-span-5 flex items-center justify-center mt-8 lg:mt-0 order-1 md:order-2 pl-5 pb-4">
            <img class="w-full max-w-xs lg:max-w-sm rounded-full" src="img/mypoto.jpeg" alt="mockup">
        </div>                
    </div>
</section>




  <section class="bg-white dark:bg-gray-900">
   
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">What tools and programming languages do I use?</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">Here These are the tools and programming languages ​​that I use.</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <img class="w-10 h-10 rounded-full" src="img\java.png" alt="Bonnie Green avatar" />
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Java</h3>
                <p class="text-gray-500 dark:text-gray-400">Bahasa yang saya gunakan untuk mendevelope Proyek Android saya</p>

            </div>
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                   
                    <img class="w-10 h-10 rounded-full" src="img\laravel.jpg" alt="Bonnie Green avatar" />
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Laravel</h3>
                <p class="text-gray-500 dark:text-gray-400">Bahasa yang saya gunakan untuk mendevelope Proyek Web saya</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <img class="w-10 h-10 rounded-full" src="img\php.png" alt="Bonnie Green avatar" />
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">PHP</h3>
                <p class="text-gray-500 dark:text-gray-400">Bahasa yang saya gunakan untuk mendevelope Proyek Web saya</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <img class="w-10 h-10 rounded-full" src="img\android.png" alt="Bonnie Green avatar" />
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Android Studio</h3>
                <p class="text-gray-500 dark:text-gray-400">Tools yang saya gunakan untuk membuat Aplikasi android.</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <img class="w-10 h-10 rounded-full" src="img\vs.jpg" alt="Bonnie Green avatar" />
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">VS Code</h3>
                <p class="text-gray-500 dark:text-gray-400">Tools yang saya gunakan untuk membuat Website dan Aplikasi android.</p>
            </div>
           
        </div>
    </div>
  </section>
{{-- project --}}
  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">What have I done?</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Project Yang Sudah Saya Kerjakan.</p>
        </div> 
        <div class="grid gap-8 lg:grid-cols-2">
            @foreach ($projects as $project)
 
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                        {{$project->category}}
                    </span>
                    <span class="text-sm">{{$project->created_at->diffForHumans() }}</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{$project->judul}}</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{Str::limit($project->body),10}}</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full" src="img\mypoto.jpeg" alt="Bonnie Green avatar" />
                        <span class="font-medium dark:text-white">
                            {{$project->author }}
                        </span>
                    </div>
                    <a href="{{$project->link}}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article>  
        
            @endforeach        
        </div>  
        <div class="flex justify-end">
        <a href="/projects" class="mt-3 inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center  text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            See More Project
        </a> 
        </div>
    </div>
  </section>
</x-layout>