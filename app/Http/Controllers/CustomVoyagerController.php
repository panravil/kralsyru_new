<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cheese;
use App\Models\Package;
use App\Models\StaticPages;

class CustomVoyagerController extends Controller
{
    ############# MAIN PHOTOS
    public function mainPhotos()
    {
        $availablePhotos = [];

        if ($handle = opendir('storage/hero-photos')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $availablePhotos[] = $entry;
                }
            }
            closedir($handle);
        }

        $staticPages = StaticPages::get();
        $dynamicPages = Cheese::get();

        return view('customvoyager.main-photos', compact('availablePhotos', 'staticPages', 'dynamicPages'));
    }



    public function saveMainPhotos()
    {
        $file = request()->file('new_file');

        if ($file) {
            $path_filename_ext = 'storage/hero-photos/' . $file->getClientOriginalName();
            if (file_exists($path_filename_ext)) {
                return redirect()->back()->with('error', 'Soubor s tímto jménem již existuje.');
            } else {
                move_uploaded_file($file, $path_filename_ext);
                return redirect()->back()->with('success', 'Soubor byl úspěšně uložen na server.');
            }
        }
        return redirect()->back()->with('error', 'Nebyl vybrán soubor k uploadu.');
    }

    public function deleteMainPhotos()
    {
        $file = request()->file;

        if ($file) {
            $path_filename_ext = 'storage/hero-photos/' . $file;
            if (!file_exists($path_filename_ext)) {
                return redirect()->back()->with('error', 'Soubor s tímto jménem neexistuje.');
            } else {
                unlink($path_filename_ext);
                return redirect()->back()->with('success', 'Soubor byl úspěšně smazán ze serveru.');
            }
        }
        return redirect()->back()->with('error', 'Nebyl vybrán soubor ke smazání.');
    }

    public function changeMainPhotos()
    {
        if (request()->type == 'static' && request()->photo != '') {
            $page = StaticPages::where('id', request()->id)->first();
            if ($page) {
                $page->cover = '/storage/hero-photos/' . request()->photo;
                $page->save();
                return redirect()->back()->with('success', 'Úspěšně uloženo.');
            }
        }

        if (request()->type == 'dynamic' && request()->photo != '') {
            $page = Cheese::where('id', request()->id)->first();
            if ($page) {
                $page->cover = '/storage/hero-photos/' . request()->photo;
                $page->save();
                return redirect()->back()->with('success', 'Úspěšně uloženo.');
            }
        }
        return redirect()->back()->with('error', 'Špatná data. Neuloženo.');
    }

    ############# PROFILE PHOTOS
    public function profilePhotos()
    {
        $availablePhotos = [];
        if ($handle = opendir('storage/profile')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $availablePhotos[] = $entry;
                }
            }
            closedir($handle);
        }

        $dynamicPages = Cheese::get();
        return view('customvoyager.profile-photos', compact('availablePhotos', 'dynamicPages'));
    }

    public function saveProfilePhotos()
    {
        $file = request()->file('new_file');

        if ($file) {
            $path_filename_ext = 'storage/profile/' . $file->getClientOriginalName();
            if (file_exists($path_filename_ext)) {
                return redirect()->back()->with('error', 'Soubor s tímto jménem již existuje.');
            } else {
                move_uploaded_file($file, $path_filename_ext);
                return redirect()->back()->with('success', 'Soubor byl úspěšně uložen na server.');
            }
        }
        return redirect()->back()->with('error', 'Nebyl vybrán soubor k uploadu.');
    }

    public function deleteProfilePhotos()
    {
        $file = request()->file;
        if ($file) {
            $path_filename_ext = 'storage/profile/' . $file;
            if (!file_exists($path_filename_ext)) {
                return redirect()->back()->with('error', 'Soubor s tímto jménem neexistuje.');
            } else {
                unlink($path_filename_ext);
                return redirect()->back()->with('success', 'Soubor byl úspěšně smazán ze serveru.');
            }
        }
        return redirect()->back()->with('error', 'Nebyl vybrán soubor ke smazání.');
    }

    public function changeProfilePhotos()
    {
        if (request()->photo != '') {
            $page = Cheese::where('id', request()->id)->first();
            if ($page) {
                $page->img = '/storage/profile/' . request()->photo;
                $page->save();
                return redirect()->back()->with('success', 'Úspěšně uloženo.');
            }
        }
        return redirect()->back()->with('error', 'Špatná data. Neuloženo.');
    }

    ############# OUR CHEESE
    public function ourCheese()
    {
        $cheeses = Cheese::get();
        return view('customvoyager.our-cheese', compact('cheeses'));
    }

    public function saveOurCheese()
    {
        $duplicates = [];
        $i = 1;
        while (true) {
            $id = 'id_' . $i;
            if (request()->$id) {
                $select = 'select_' . $i;
                $duplicates[] = request()->$select;
            } else {
                break;
            }
            $i++;
        }

        if (count($duplicates) > count(array_unique($duplicates))) {
            return redirect()->back()->with('error', 'Nemůžete přiřadit stejnou číselnou váhu více různým sýrům.');
        }

        $i = 1;
        while (true) {
            $id = 'id_' . $i;
            if (request()->$id) {
                $select = 'select_' . $i;
                $cheese = Cheese::where('id', request()->$id)->first();
                $cheese->ordering = request()->$select;
                $cheese->save();
            } else {
                break;
            }
            $i++;
        }

        return redirect()->back()->with('success', 'Změna řazení sýrů byla úspěšně uložena.');

    }

    ############# CHEESE PACKAGE
    public function baleniPhotos()
    {
        $availablePhotos = [];
        if ($handle = opendir('storage/packages')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $availablePhotos[] = $entry;
                }
            }
            closedir($handle);
        }

        $packages = Package::with('cheeseId')->orderBy('cheese_id')->orderBy('ordering')->get();

        return view('customvoyager.cheese-package', compact('availablePhotos', 'packages'));
    }

    public function saveBaleniPhotos()
    {
        $file = request()->file('new_file');
        if ($file) {
            $path_filename_ext = 'storage/packages/' . $file->getClientOriginalName();
            if (file_exists($path_filename_ext)) {
                return redirect()->back()->with('error', 'Soubor s tímto jménem již existuje.');
            } else {
                move_uploaded_file($file, $path_filename_ext);
                return redirect()->back()->with('success', 'Soubor byl úspěšně uložen na server.');
            }
        }
        return redirect()->back()->with('error', 'Nebyl vybrán soubor k uploadu.');
    }

    public function deleteBaleniPhotos()
    {
        $file = request()->file;
        if ($file) {
            $path_filename_ext = 'storage/packages/' . $file;
            if (!file_exists($path_filename_ext)) {
                return redirect()->back()->with('error', 'Soubor s tímto jménem neexistuje.');
            } else {
                unlink($path_filename_ext);
                return redirect()->back()->with('success', 'Soubor byl úspěšně smazán ze serveru.');
            }
        }
        return redirect()->back()->with('error', 'Nebyl vybrán soubor ke smazání.');
    }

    public function changeBaleniPhotos()
    {
        if (request()->photo != '') {
            $page = Package::where('id', request()->id)->first();
            if ($page) {
                $page->img = '/storage/packages/' . request()->photo;
                $page->save();
                return redirect()->back()->with('success', 'Úspěšně uloženo.');
            }
        }
        return redirect()->back()->with('error', 'Špatná data. Neuloženo.');
    }
}
