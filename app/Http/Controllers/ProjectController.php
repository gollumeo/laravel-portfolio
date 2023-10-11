<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): View
    {

        $projects = [

            //TODO: ajouter PHP dans les technos Laravel
            [
                'name' => 'Chirper',
                'img_src' => '{{ asset("assets/img/projects/chirper.png")}}',
                'demo_url' => '',
                'code_url' => 'https://github.com/gollumeo/chirper',
                'technologies' => ['HTML', 'TailwindCSS', 'Laravel', 'Vue.JS']
            ],
            [
                'name' => 'La Licorne Verte',
                'img_src' => '{{ asset("assets/img/projects/licorne_verte.png")}}',
                'demo_url' => 'https://licorneverte.pierre-mauriello.be/',
                'code_url' => 'https://github.com/gollumeo/licorneverte',
                'technologies' => ['HTML', 'TailwindCSS', 'Laravel', 'Livewire']
            ],
            [
                'name' => 'AresCreative',
                'img_src' => '{{ asset("assets/img/projects/ares_creative.png")}}',
                'demo_url' => 'https://arescreative.fr/',
                'code_url' => '',
                'technologies' => ['HTML', 'CSS', 'PHP', 'Stripe', 'MySQL']
            ],
            [
                'name' => 'AresChat',
                'img_src' => '{{ asset("assets/img/projects/openares.png")}}',
                'demo_url' => 'https://www.openares.net/',
                'code_url' => '',
                'technologies' => ['TypeScript', 'Svelte', 'Stripe', 'Node.JS', 'HuggingFace\'s inferences', 'TailwindCSS']
            ],
            [
                'name' => 'Personal LLMs fine tuning',
                'img_src' => '{{ asset("assets/img/projects/llm.jpg")}}',
                'demo_url' => '',
                'code_url' => 'https://huggingface.co/gollumeo',
                'technologies' => ['Python', 'PEFT', 'QLoRA', 'Rope Scaling']
            ],
            [
                'name' => 'Faraday LLMs fine tuning',
                'img_src' => '{{ asset("assets/img/projects/llm.jpg")}}',
                'demo_url' => '',
                'code_url' => 'https://huggingface.co/Faradaylab',
                'technologies' => ['Python', 'PEFT', 'QLoRA', 'Rope Scaling']
            ],
            [
                'name' => 'Golluméweather',
                'img_src' => '{{ asset("assets/img/projects/weather_app.png")}}',
                'demo_url' => 'https://gollumeo.github.io/weather-app/',
                'code_url' => 'https://github.com/gollumeo/weather-app',
                'technologies' => ['HTML', 'CSS', 'JavaScript']
            ],
            [
                'name' => 'PHP Machine Learning',
                'img_src' => '{{ asset("assets/img/projects/machine_learning.jpg")}}',
                'demo_url' => '',
                'code_url' => 'https://github.com/gollumeo/php-machine-learning',
                'technologies' => ['PHP', 'Machine Learning', 'Laravel']
            ],
            [
                'name' => 'Cogip (Client)',
                'img_src' => '{{ asset("assets/img/projects/cogip_client.png")}}',
                'demo_url' => '',
                'code_url' => 'https://github.com/gollumeo/cogip/tree/main/front',
                'technologies' => ['HTML', 'JavaScript', 'React', 'Project Management', 'SCSS']
            ],
            [
                'name' => 'Cogip (API)',
                'img_src' => '{{ asset("assets/img/projects/api.png")}}',
                'demo_url' => '',
                'code_url' => 'https://github.com/gollumeo/cogip/tree/back',
                'technologies' => ['PHP', 'POO', 'JSON', 'Model-Controller Pattern', 'Project Management']
            ],
            [
                'name' => '[AZ]Store',
                'img_src' => '{{ asset("assets/img/projects/az_store.png")}}',
                'demo_url' => '',
                'code_url' => 'https://github.com/gollumeo/az_store',
                'technologies' => ['HTML', 'PHP', 'TailwindCSS', 'Project Management']
            ],
            [
                'name' => 'Golluméquotes',
                'img_src' => '{{ asset("assets/img/projects/quote.png")}}',
                'demo_url' => 'https://gollumeo.github.io/random-quote-using-async-await/',
                'code_url' => 'https://github.com/gollumeo/random-quote-using-async-await',
                'technologies' => ['HTML', 'SCSS', 'JavaScript']
            ],
            [
                'name' => 'The Collection',
                'img_src' => '{{ asset("assets/img/projects/collection.png")}}',
                'demo_url' => 'https://gollumeo.github.io/the-collection/',
                'code_url' => 'https://github.com/gollumeo/the-collection',
                'technologies' => ['HTML', 'SCSS', 'JavaScript']
            ],

        ];
        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
