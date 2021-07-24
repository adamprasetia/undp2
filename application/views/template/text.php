<div class="wrap <?php echo !empty($show)?'':'hidden'?>">
    <div class="min-h-screen min-w-full pt-24 md:pt-36">
        
        <div class="content p-6 text-t-blue">
            <h2 class="text-base font-bold text-t-red mb-4"><?php echo $title ?></h2>
            <h1 class="text-xl font-bold"><?php echo $subtitle ?></h1>
            <div class="my-4">
                <label for="q<?php echo $inc ?>" class="font-bold block"><?php echo $question ?></label>
                <input type="text" name="q[<?php echo $inc ?>]" id="q<?php echo $inc ?>" class="border-2 border-t-blue rounded-lg px-2 py-1 w-full mt-2 input__text" data-id="<?php echo $inc ?>">
            </div>
            <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
            <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
        </div>
    </div>
</div>
