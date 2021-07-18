<div class="wrap <?php echo !empty($show)?'':'hidden'?>">
    <div class="min-h-screen min-w-full pt-24 md:pt-36">
        
        <div class="content p-6 text-t-blue">
            <h2 class="text-base font-bold text-t-red mb-4"><?php echo $title ?></h2>
            <h1 class="text-xl font-bold"><?php echo $subtitle ?></h1>
            <div>
                <?php foreach ($question as $row) { ?>                                
                    <div class="my-4 flex justify-center items-center flex__dropdown">
                        <p <?php echo isset($question_attr)?$question_attr:'' ?>><?php echo $row ?></p>
                        <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                            <option value="" class="hidden" disabled selected>...</option>
                            <?php if(!empty($option)): ?>
                                <?php foreach ($option as $row_option) { ?>
                                    <option value="<?php echo $row_option ?>"><?php echo $row_option ?></option>    
                                <?php } ?>
                            <?php else: ?>
                                <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                <option value="Tidak Setuju">Tidak Setuju</option>
                                <option value="Setuju">Setuju</option>
                                <option value="Sangat Setuju">Sangat Setuju</option>
                            <?php endif ?>
                        </select>
                    </div>
                <?php } ?>
            </div>
            <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>                    
            <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
        </div>
    </div>
</div>
