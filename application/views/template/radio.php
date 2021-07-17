<div class="wrap <?php echo !empty($show)?'':'hidden'?>">
    <div class="min-h-screen min-w-full pt-24 md:pt-36">
        
        <div class="content p-6 text-t-blue ques12">
            <h2 class="text-base font-bold text-t-red mb-4"><?php echo $title ?></h2>
            <h1 class="text-xl font-bold"><?php echo $subtitle ?></h1>
            <div class="my-4">
                <?php $others = in_array('Lainnya', $question)?true:false; ?>
                <?php foreach ($question as $row) { ?>
                <div class="my-2">
                    <label class="flex items-center input__wrap">
                        <?php if(!empty($others)):?>
                            <input value="<?php echo $row ?>" type="radio" name="q[<?php echo $inc ?>][]" class="mr-3 hidden radio__pick <?php echo $row=='Lainnya'?'last':''?>" data-id="<?php echo $inc ?>">
                        <?php else: ?>
                            <input value="<?php echo $row ?>" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick <?php echo $row=='Lainnya'?'last':''?>" data-id="<?php echo $inc ?>">
                        <?php endif ?>
                        <span class="input__custom"></span>
                        <?php echo $row ?>
                    </label>
                    <?php if($row=='Lainnya'): ?>
                        <div class="flex-none">
                            <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="Silakan diisi..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                        </div>
                    <?php endif ?>
                </div>
                <?php } ?>
            </div>
            <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
        </div>
    </div>
</div>
