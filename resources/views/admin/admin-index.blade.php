<x-defaultlayout>
<!-- component -->
    @php
        $active = 'dashboard';
    @endphp
    <x-admin.admin-bars :active="$active"></x-admin.admin-bars>
        <!-- ./Sidebar -->

        <div class="h-full ml-14 mt-20 mb-10 md:ml-64  rounded-tl-md px-2.5">

            <h2 class="text-lg md:text-xl lg:text-2xl text-center font-montsemibold">Welcome admin! Your dashboard is under development</h2>


    </div>


    <script>
      const setup = () => {
        const getTheme = () => {
          if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'))
          }
          return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
        }

        const setTheme = (value) => {
          window.localStorage.setItem('dark', value)
        }

        return {
          loading: true,
          isDark: getTheme(),
          toggleTheme() {
            this.isDark = !this.isDark
            setTheme(this.isDark)
          },
        }
      }
    </script>
</x-defaultlayout>
