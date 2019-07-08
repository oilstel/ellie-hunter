<?php snippet('header') ?>

<main id="home">

  <?php if ($page->show_moving_text() == "true"): ?>
  <div class="moving-text">
      <svg>
          <defs>
              <path id="testPath" d="M112.4,279.61c4.06-15.83,8.49-32.06,17.36-46,10.37-16.25,26.4-24.72,45.51-25.95s39.79,1.39,58.49,5.56,35.62,12.54,49.73,25.71c29,27,42.77,65,60,99.71,7.83,15.75,16.51,31.88,29.79,43.77A64.76,64.76,0,0,0,416.24,399c33.62.26,61.38-22.91,71.12-54.42,9.83-31.82,1.37-71-31.14-85.62-28.74-12.92-64.91-10.56-93.92.22s-53.65,31.48-66,60.19c-7.74,18-11.07,37.44-16.39,56.22-5.75,20.26-13.74,39.8-22.29,59-8.1,18.19-16.36,36.31-24.61,54.43-7.76,17.05-16.85,34.9-32.32,46.24-14.22,10.42-33.64,15.31-49.66,5.91-14-8.24-21.29-24.28-25.42-39.35-3.09-11.29-9.94-37.83,6.92-41.83,4.92-1.17,10.25.14,15.1,1s9.75,1.85,14.6,2.9c8.91,1.92,17.76,4.14,26.51,6.73,36.22,10.7,69.68,28,96.24,55.19,13.12,13.45,25.43,27.38,40.46,38.79A200.86,200.86,0,0,0,372.3,591a198.31,198.31,0,0,0,52.2,13c17.24,1.87,36.22,1.54,50.78-9.15,12.78-9.37,19.94-24.24,25.18-38.78A302.79,302.79,0,0,0,515.35,495c1.06-7.7,3-15.83-4-21.21s-16-9.26-24.4-12.26a115.28,115.28,0,0,0-53.85-5.62c-33.1,4.47-63.37,24.33-81,52.66-10.55,17-16.59,36.17-25,54.16-8.59,18.31-20.09,35-31.72,51.46-22.55,31.95-46.27,65.21-81.1,84.75-16.13,9.06-34,14.65-52.59,14.79-3.22,0-3.23,5,0,5,36.38-.27,68.77-20.26,93.52-45.62,13.41-13.76,25-29.14,36.2-44.73,11.69-16.29,23.56-32.62,33.35-50.15,9.65-17.29,15.8-36.12,24.44-53.89,7.91-16.25,18.64-30.59,33-41.7a109.45,109.45,0,0,1,104.21-16,106.24,106.24,0,0,1,13.26,5.91c4.89,2.6,11.73,5.41,11.86,11.76.2,10.38-2.8,21.75-5,31.86-4,18.75-9.09,38.45-18.29,55.4-4.16,7.66-9.51,14.82-16.73,19.86-7.84,5.48-17.38,7.8-26.82,8.34-18.36,1.06-37.35-2.56-54.86-7.87a196.6,196.6,0,0,1-49.82-23.13c-16.13-10.46-29.74-23.42-42.85-37.37-12.72-13.52-25.87-26.12-41.46-36.31a232.7,232.7,0,0,0-47.59-23.35,350.42,350.42,0,0,0-52.69-14.34c-13.71-2.69-31.53-6.69-37.1,10.3-4.26,13,.13,29.06,4.29,41.55,4.48,13.43,11.66,26.68,23.63,34.8,13.09,8.87,29.5,8.89,43.77,2.93,15.86-6.63,27.55-19.37,36.25-33.87,9.62-16,16.38-33.74,24.14-50.7,8.3-18.16,16.73-36.28,23.93-54.91,7.28-18.8,12.24-38,17.26-57.49,4.65-18.11,10.58-36,22.33-50.88,19.79-25,50.86-39.45,82.17-42.9,16.35-1.79,33.47-.92,49.25,3.93,19,5.85,32.89,18.93,38.22,38.35,9.17,33.43-5.66,73.5-37.65,88.87-15.42,7.41-33.87,8.79-50,3-17.59-6.26-29.69-21.24-38.83-36.87-19.24-32.88-30.65-70-54.13-100.44-10.4-13.49-22.95-25.61-38-33.82-16.42-9-34.94-12.49-53.34-14.64-18.11-2.11-37.57-4.39-55.24,1.46-14.83,4.91-26,15.82-33.47,29.27s-11.57,28.22-15.33,42.91c-.8,3.12,4,4.45,4.82,1.33Z" />
          </defs>
          <desc>Purple text moving along curved path with different pacing.</desc>
          <text x="2" y="2" fill="#000" font-size="24" font-family="Times">
          <textPath id="tp" class="drawing-text" startOffset="0%" xlink:href="#testPath"></textPath> 
          </text> 
      </svg>
  </div>
  <?php endif ?>

  <?php if ($page->show_homepage_image() == "true"): ?>
  <img src="<?php if($image = $page->cover()->toFile()): ?><?= $image->url() ?><?php endif ?>" />
  <?php endif ?>

</main>

<?php snippet('footer') ?>