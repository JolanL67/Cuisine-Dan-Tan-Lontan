<?php

namespace App\Http\Controllers;

use App\Http\Requests\PresentationRequest;
use App\Presentation;
use Illuminate\Support\Str;

class PresentationController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation)
    {
        $presentation = Presentation::all();
        $presentation = $presentation[0];

        return view('presentation.show', [
            'presentation' => $presentation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentation $presentation)
    {
        $presentation = Presentation::all()[0];

        return view('presentation.edit', [
            'presentation' => $presentation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(PresentationRequest $request, Presentation $presentation)
    {
        // TODO Changer le nom des attributs pour les message d'erreur
        // https://laraveldaily.com/laravel-validation-specify-attribute-names-for-error-messages/
        // https://laravel.sillo.org/cours-laravel-5-5-les-bases-la-validation/
        // https://laravel.com/docs/7.x/validation#customizing-the-validation-attributes


        $presentationModel = Presentation::all()[0];

        $description = $request->input('description');
        $presentationModel->description = $description;

        $thumbnail = $request->file('thumbnail');
        if ( $thumbnail ) {

            $thumbnailName = Str::random(20);
            $extension = strtolower($thumbnail->getClientOriginalExtension());
            $thumbnailFullName = $thumbnailName . '.' . $extension;
            $thumbnail->move('presentation_image/', $thumbnailFullName);
            $presentationModel->thumbnail = env('APP_URL') . "/presentation_image/" . $thumbnailFullName;
        }

        $bgImage = $request->file('bg_image');
        if ( $bgImage ) {

            $bgImageName = Str::random(20);
            $extension = strtolower($bgImage->getClientOriginalExtension());
            $bgImageFullName = $bgImageName . '.' . $extension;
            $bgImage->move('presentation_image/', $bgImageFullName);
            $presentationModel->bg_image = env('APP_URL') . "/presentation_image/" . $bgImageFullName;
        }

        $commandInfo = $request->input('command_info');
        $presentationModel->command_info = $commandInfo;

        $paymentInfo = $request->input('payment_info');
        $presentationModel->command_info = $paymentInfo;

        $presentationModel->save();


        return redirect()->route('presentation.show', [
            'presentation' => $presentation,
        ]);
    }
}
