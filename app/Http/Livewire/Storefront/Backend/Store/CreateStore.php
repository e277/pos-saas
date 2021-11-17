<?php

namespace App\Http\Livewire\Storefront\Backend\Store;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\Store;
use App\Models\StoreType;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateStore extends Component
{
    use WithFileUploads;

    public Store $store;
    public Contact $contact;

    public $upload;
    public $bannerUpload = [];

    protected array $rules = [
        'store.name' => 'required|max:20',
        'store.store_type_id' => 'required|int',
        'store.theme' => 'required',
        'store.title' => 'required|max:40',
        'upload' => 'required|image',
//        'bannerUpload' => 'required|image',
        'store.banner_message' => 'required:max:80',
        'store.mission' => 'required:max:95',
        'store.slogan' => 'required|max:45',
        'store.desc' => 'required|max:150',
        'contact.contact_num' => 'required|numeric',
        'contact.contact_email' => 'required|email',
        'contact.contact_location' => 'required|max:240',
    ];

    protected array $message = [
        'store.name.required' => 'store.name is Required',
        'store.store_type_id.required' => 'store.store_type_id is Required',
        'store.theme.required' => 'store.theme is Required',
        'store.title.required' => 'store.title is Required',
        'store.logo_path.required' => 'store.logo_path is Required',
        'upload.required' => 'Store Logo is Required',
        'bannerUpload.required' => '5 Banner Images Are Required',
        'store.banner_message.required' => 'store.banner_message is Required',
        'store.slogan.required' => 'store.slogan is Required',
        'store.mission.required' => 'store.slogan is Required',
        'store.desc.required' => 'store.desc is Required',
        'contact.contact_num.required' => 'contact.contact_num is Required',
        'contact.contact_email.required' => 'contact.contact_email is Required',
        'contact.contact_location.required' => 'contact.contact_location is Required'

    ];

    public function createStore()
    {
        $this->validate();

        $this->dispatchBrowserEvent('first-form');

         $logoFIleName = $this->upload->store('/','storeLogo');

        $id = Contact::create([
            'contact_num' => $this->contact->contact_num,
            'contact_email' => $this->contact->contact_email,
            'contact_location' => $this->contact->contact_location
        ])->id;

        $id = Store::create([
            'user_id' => 85,
            'contact_id' => $id,
            'store_type_id' => $this->store->store_type_id,
            'name' => $this->store->name,
            'title' => $this->store->title,
            'banner_message' => $this->store->banner_message,
            'slogan' => $this->store->slogan,
            'mission' => $this->store->mission,
            'theme' => $this->store->theme,
            'desc' => $this->store->desc,
            'logo_path' => $logoFIleName
        ])->id;

        foreach ($this->bannerUpload as $bannerI){

            $bannerFIleName = $bannerI->store('/','bannerImages');

            Banner::create([
                'store_id' => $id,
                'image_path' => $bannerFIleName,
            ]);

        }

        $this->dispatchBrowserEvent('show-alert');
        return redirect()->route('backEnd.index')->with(['success','Store Created Successful']);

    }

    public function updated(): void
    {
        $this->validate();

    }

    public function mount(): void
    {
        $this->store = new Store;
        $this->contact = new Contact;
    }

    public function render()
    {
        return view('livewire.storefront.backend.store.create-store', [
            'storeType' => StoreType::all(),
        ])
            ->extends('layouts.storeBackend');
    }
}
