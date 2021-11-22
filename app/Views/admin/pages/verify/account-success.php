<?php $this->extend("admin/layout/main"); ?>

<?php $this->section("content")?>
<div class="col-12 col-md-6 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h4>Request Failed</h4>
        </div>
        <div class="card-body">
            <div class="empty-state" data-height="400">
                <div class="empty-state-icon bg-danger">
                    <i class="fas fa-times"></i>
                </div>
                <h2>HTTP Request Failed</h2>
                <p class="lead">
                    We tried it, but failed when requesting data to the server, sorry. (Code: <a href="#" class="bb">14045</a>)
                </p>
                <a href="#" class="btn btn-warning mt-4">Try Again</a>
                <a href="#" class="mt-4 bb">Cancel</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Not Found</h4>
        </div>
        <div class="card-body">
            <div class="empty-state" data-height="600">
                <img class="img-fluid" src="../assets/img/drawkit/drawkit-nature-man-colour.svg" alt="image">
                <h2 class="mt-0">Looks like you got lost</h2>
                <p class="lead">
                    We can't find the path you're looking for, check the path again and try again.
                </p>
                <a href="#" class="btn btn-warning mt-4">Try Again</a>
                <a href="#" class="mt-4 bb">Need Help?</a>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection()?>


