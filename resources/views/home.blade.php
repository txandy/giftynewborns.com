@extends('layouts.base')


@section('content')

    <section>

        <div class="hero min-h-[50vh]" style="background-image: url({{asset('images/hero.webp')}});">
            <div class="hero-overlay"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                    <p class="mb-5">
                        The baby registry that grows with your family
                    </p>
                    <div class="flex gap-4 justify-center">
                        <button class="btn btn-primary">Create list</button>
                        <button class="btn btn-secondary">Search list</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 p-8">
            <div class="w-full md:w-1/3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <h2 class="text-2xl font-bold mb-2">Create Your Registry</h2>
                <p class="text-gray-600">Easily set up your baby registry and share it with friends and family.</p>
            </div>
            <div class="w-full md:w-1/3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <h2 class="text-2xl font-bold mb-2">Manage Your List</h2>
                <p class="text-gray-600">Keep track of gifts, update your preferences, and stay organized.</p>
            </div>
            <div class="w-full md:w-1/3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m0 0L5.5 6.5M9 3l3.5 3.5"/>
                </svg>
                <h2 class="text-2xl font-bold mb-2">Celebrate Together</h2>
                <p class="text-gray-600">Enjoy the special moments with your loved ones.</p>
            </div>

        </div>
    </section>

    <section>
        <div class="bg-primary text-primary-content py-12 px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="mb-6">Join thousands of parents who trust us for their baby registry needs.</p>
            <button class="btn btn-secondary btn-lg">Create Your Registry Now</button>
        </div>
    </section>

    {{-- Blog Post --}}
    <section>
        <div class="p-8 max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center">From Our Blog</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="card bg-base-100 shadow-md">
                    <figure><img src="https://placehold.co/600x400" alt="Blog Post 1" class="w-full h-48 object-cover"></figure>
                    <div class="card-body">
                        <h3 class="card-title">10 Must-Have Baby Products for New Parents</h3>
                        <p>Discover the essential items every new parent should consider for their baby registry.</p>
                        <div class="card-actions justify-end">
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md">
                    <figure><img src="https://placehold.co/600x400" alt="Blog Post 2" class="w-full h-48 object-cover"></figure>
                    <div class="card-body">
                        <h3 class="card-title">How to Choose the Perfect Baby Name</h3>
                        <p>Tips and ideas to help you find the perfect name for your little one.</p>
                        <div class="card-actions justify-end">
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md">
                    <figure><img src="https://placehold.co/600x400" alt="Blog Post 3" class="w-full h-48 object-cover"></figure>
                    <div class="card-body">
                        <h3 class="card-title">Preparing for Baby: A Checklist for Expecting Parents</h3>
                        <p>Stay organized with our comprehensive checklist for preparing for your baby's arrival.</p>
                        <div class="card-actions justify-end">
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CTA View blog --}}
            <div class="text-center mt-8">
                <a href="#" class="btn btn-outline btn-primary">View All Blog Posts</a>
            </div>
        </div>

    </section>

@endsection
