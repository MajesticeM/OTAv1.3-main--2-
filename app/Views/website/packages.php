<!-- app/Views/dashboard/coach.php -->

<?= $this->extend('layouts/maincoach') ?>
<?= $this->extend('layouts/_navbar') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
        <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Bronze Package</h3>
        </div>
        <div class="card-body">
            <p>1 sport selection</p>
            <p>1 athlete contract</p>
            <h5 style="text-algin:center"><b>30 day free trial</b></h5>
        </div>
    </div>
        </div>
        <div class="col-lg-4">
        <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Silver Package</h3>
        </div>
        <div class="card-body">
           <p>Up to 3 sports selected</p>
           <p>5-10 athletes</p>
           <p>3 coaches can be added</p>
           <h5 style="text-algin:center"><b>$50/per year</b></h5>
        </div>
    </div>
        </div>
        <div class="col-lg-4">
        <div class="card">
        <div class="card-header bg-primary text-white">
        <h3 class="card-title">Gold Package</h3>
        </div>
        <div class="card-body">
            <p>Up to 6 sports selected</p>
            <p>Unlimited athletes</p>
            <p>4-6 coaches</p>
            <h5 style="text-algin:center"><b>$100/per year</b></h5>
        </div>
    </div>
        </div>
    
    </div>
</div>
<?= $this->endSection() ?>
