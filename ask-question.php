<?php
include 'includes/header.php';
include 'includes/topmenu.php';
$type = "button";
?>

<section id="askquestion" class="askquestion">
    <h1 class="ask-question-heading">
    Now that you are here, you must ask a question
    </h1>
    <form action="" class="ask-form form-horizontal">
        <div class="col-8">
            <div class="form-group">
                <label class="control-label" for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control mb-3" placeholder="Please enter a relatable and understandable title">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label" for="title">Desciption</label>
                <textarea name="desc" id="desc" cols="30" rows="10" class="form-control mb-3" placeholder="Please Enter a valid description of your query"></textarea>
            </div>
        </div>
        <div class="col-md-8">
            <div class="col-8">
                <div class="form-group">
                    <label class="control-label" for="title">Tags</label>
                    <input type="text" class="tags-input" value="" data-role="tagsinput"></input>

                </div>
            </div>
            <button class="btn btn-block main-outline-btn">Review</button>
            <button class="btn btn-block main-btn disabled-btn" type="<?php echo $type; ?>">Post</button>
        </div>
    </form>
</section>

<?php
include 'includes/footer.php';
?>
