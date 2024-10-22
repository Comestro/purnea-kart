<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                        icon="solar:shop-2-bold-duotone" class="text-primary fs-20"></iconify-icon>Store
                    Settings</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <livewire:admin.setting.seller-setting.seller-name :seller="$sellerinfo" />
                    </div>
                    <div class="col-lg-6">
                        <livewire:admin.setting.seller-setting.seller-email :seller="$sellerinfo" />
                    </div>
                    <div class="col-lg-6">
                        <livewire:admin.setting.seller-setting.seller-mobile :seller="$sellerinfo" />
                    </div>
                    <div class="col-lg-6">
                        <livewire:admin.setting.seller-setting.seller-gst :seller="$sellerinfo" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>