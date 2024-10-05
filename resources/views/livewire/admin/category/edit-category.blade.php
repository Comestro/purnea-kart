<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Category</h4>
    </div>

    <form wire:submit.prevent="store">
        <div class="card-body">
            <div class="row">
            <livewire:admin.category.edit-main-field :category="$category"/>
            <livewire:admin.category.edit-title-field/>
            <livewire:admin.category.edit-title-slug/>
            <livewire:admin.category.edit-description/>
            

        
        </div>
    </form>
</div>
