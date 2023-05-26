<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>'What is Web Development',
            'description'=>'Web development is the process of building websites and apps for the internet—or for a private network known as an intranet.',
            'content'=>'<h1>What is web development?<h1>
            <p style="margin-top:15px;">Web development is the process of building websites and apps for the internet—or for a private network known as an intranet. Web developers bring the design and functionality of a website to life, writing code that determines things like style, layout, and interactivity. From the most simple, static web pages to social media platforms and apps; from e-commerce websites to content management systems (like WordPress)—all the tools we use via the internet have been built by web developers. </p>

            <p style="margin-top:20px;">There are three different types (or layers) of web development: The frontend, the backend, and database technology. Frontend development, otherwise known as client-side scripting, encompasses all the elements of a website that the user experiences directly. Things like layout, font, colors, menus, and contact forms are all powered by the frontend.</p>',
            'image'=>'web-dev.webp',
        ];
    }
}
