<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Menu;

class MenuController extends Controller
{
    public function browse()
    {
        $menu = Menu::paginate(10);

        return view('menu/browse', [
            'menu' => $menu
        ]);
    }

    public function add(MenuRequest $request)
    {
        $menu = new Menu;

        $menu->type = $request->input('type');
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->ingredient = $request->input('ingredient');
        $menu->is_discount = $request->input('is_discount');
        $menu->nb_unit = $request->input('nb_unit');

        if ($request->input('is_discount')) {
            $menu->is_discount = $request->input('is_discount');
            $menu->nb_unit = $request->input('nb_unit');
            $menu->discount_price = $request->input('discount_price');
        }
        else {
            $menu->is_discount = $request->input('is_discount');
            $menu->nb_unit = null;
            $menu->discount_price = null;
        }

        $menu->save();

        return redirect('menu')->with('success', 'Votre plat a bien été ajouté !');
    }

    public function edit($id)
    {
        $menu = Menu::find($id);

        return view('menu/edit', [
            'menu' => $menu
        ]);
    }

    public function update(MenuRequest $request, $id)
    {
        $menu = Menu::find($id);

        $menu->type = $request->input('type');
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->ingredient = $request->input('ingredient');

        if ($request->input('is_discount')) {

            $menu->is_discount = $request->input('is_discount');
            $menu->nb_unit = $request->input('nb_unit');
            $menu->discount_price = $request->input('discount_price');
        }
        else {
            $menu->is_discount = $request->input('is_discount');
            $menu->nb_unit = null;
            $menu->discount_price = null;
        }

        $menu->save();

        return redirect('menu')->with('success', 'Votre plat a bien été modifié !');
    }

    public function delete($menuId)
    {
        $menu = Menu::find($menuId);

        $menu->delete();

        return redirect()->route('menu')->with('success', 'Votre plat a bien été supprimé !');
    }
}
