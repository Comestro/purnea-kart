<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Category</h4>
    </div>

    
        <div class="card-body">
            <div class="row">
            <livewire:admin.category.edit-main-field :category="$category"/>
            <livewire:admin.category.edit-title-field :category="$category"/>
            
            <livewire:admin.category.edit-title-slug :category="$category"/>
            <livewire:admin.category.edit-description :category="$category"/>
            

        
        </div>
    
</div>
