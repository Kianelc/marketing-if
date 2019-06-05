<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
  <main role="main">
    <section class="bg-principal text-center">
      <div class="container">
        <div class="col-md-8 offset-md-2">
          <h2 class="title-pilares">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy</h2>
          <div>
            <?php 
              if ( have_posts() ):
                while( have_posts() ) : the_post(); 
            ?>
              <h3 class="title-pilares"><?php the_content(); ?></h3>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </section>
    <div class="album py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-10 offset-md-1">
              <div class="card card-float mb-5 shadow-sm">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/48dAJyd4VzA" frameborder="0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
                  </div>
                  <div class="col-md-4 d-flex align-items-center">
                    <div class="card-body m-3">
                      <p class="card-text card-text-proposta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pellentesque
                        vehicula, nulla quis malesuada placerat,
                        est felis viverra augue, at sagittis sem lectus vel purus. Ut nunc mauris, suscipit ut tortor a,
                        dictum mattis orci.</p>
                      <div class="text-center">
                        <button class="btn btn-proposta-valor text-uppercase px-4 py-2" type="button">Conheça o case</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pb-5">
              <div id="section01" class="demo text-center">
                <a href="#pilares"><span></span></a>
              </div>
            </div>

            <div class="mt-5 text-center">
              <div class="col-md-6 offset-md-3">
                <h3 class="title-pilares">Lorem ipsum dolor</h3>
                <p class="lead text-muted">Cras ante diam, cursus sit amet vestibulum id, semper at risus. Cras ante
                  diam,
                  cursus sit amet vestibulum id, semper at risus.</p>
              </div>
            </div>
          </div>


          <div class="col-md-3 mt-5" id="pilares">
            <div class="card mb-5 shadow-sm">
              <div class="text-center mt-4">
                <img class="rounded-circle"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                  alt="Generic placeholder image" width="148" height="148">
              </div>
              <div class="card-body">
                <h6 class="title-pilares text-center mb-3">Lorem ipsum dolor</h6>
                <p class="card-text text-center card-text-pilares">Cras ante diam, cursus sit amet vestibulum id, semper
                  at risus. Ut cursus a dui
                  a suscipit. Aenean mollis nibh pharetra placerat condimentum.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-5">
            <div class="card mb-5 shadow-sm">
              <div class="text-center mt-4">
                <img class="rounded-circle"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                  alt="Generic placeholder image" width="148" height="148">
              </div>
              <div class="card-body">
                <h6 class="title-pilares text-center mb-3">Lorem ipsum dolor</h6>
                <p class="card-text text-center card-text-pilares">Cras ante diam, cursus sit amet vestibulum id, semper
                  at risus. Ut cursus a dui
                  a suscipit. Aenean mollis nibh pharetra placerat condimentum.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-5">
            <div class="card mb-5 shadow-sm">
              <div class="text-center mt-4">
                <img class="rounded-circle"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                  alt="Generic placeholder image" width="148" height="148">
              </div>
              <div class="card-body">
                <h6 class="title-pilares text-center mb-3">Lorem ipsum dolor</h6>
                <p class="card-text text-center card-text-pilares">Cras ante diam, cursus sit amet vestibulum id, semper
                  at risus. Ut cursus a dui
                  a suscipit. Aenean mollis nibh pharetra placerat condimentum.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-5">
            <div class="card mb-5 shadow-sm">
              <div class="text-center mt-4">
                <img class="rounded-circle"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                  alt="Generic placeholder image" width="148" height="148">
              </div>
              <div class="card-body">
                <h6 class="title-pilares text-center mb-3">Lorem ipsum dolor</h6>
                <p class="card-text text-center card-text-pilares">Cras ante diam, cursus sit amet vestibulum id, semper
                  at risus. Ut cursus a dui
                  a suscipit. Aenean mollis nibh pharetra placerat condimentum.</p>
              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1 text-center pt-5">
            <h2 class="title-pilares">Lorem ipsum dolor sit amet, consectetur?</h2>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 mt-5 pl-0">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/wAnTwurIw1c" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-6 mt-5 px-5 d-flex align-items-center">
            <div>
              <div class="d-flex align-items-center pt-4">
                <div>
                  <img class="rounded-circle"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="Generic placeholder image" width="50" height="50">
                </div>
                <p class="card-text-pilares mb-0 mx-4">Cras ante diam, cursus sit amet vestibulum id, semper at
                  risus. Ut cursus a dui a suscipit. Aenean mollis nibh pharetra placerat condimentum.</p>
              </div>
              <div class="d-flex align-items-center pt-4">
                <div>
                  <img class="rounded-circle"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="Generic placeholder image" width="50" height="50">
                </div>
                <p class="card-text-pilares mb-0 mx-4">Cras ante diam, cursus sit amet vestibulum id, semper at risus. Ut cursus a
                  dui a suscipit. Aenean mollis nibh pharetra placerat condimentum.</p>
              </div>
              <div class="d-flex align-items-center pt-4">
                <div>
                  <img class="rounded-circle"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="Generic placeholder image" width="50" height="50">
                </div>
                <p class="card-text-pilares mb-0 mx-4">Cras ante diam, cursus sit amet vestibulum id, semper at risus. Ut cursus a
                  dui a suscipit. Aenean mollis nibh pharetra placerat condimentum.</p>
              </div>
              <div class="text-center mt-5">
                <button class="btn btn-proposta-valor text-uppercase px-5" type="button">Call to action</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="bg-calculadora text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-8 offset-md-2">
              <h2 class="title-pilares">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy?</h2>
            </div>
            <form class="col-md-6 offset-md-3 mt-5">
              <div class="form-row">
                <div class="col">
                  <select class="form-control">
                    <option>Município</option>
                  </select>
                </div>
                <div class="col-4">
                  <select class="form-control">
                    <option>UF</option>
                  </select>
                </div>
              </div>
              <div class="text-center mt-5">
                <button class="btn btn-proposta-valor text-uppercase px-5" type="button">Descubra agora</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <!-- AQUI É UM SLIDER -->
    <section class="bg-blog text-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <?php if ( dynamic_sidebar('rodape_widgets') ) : else : endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-blog text-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <img class="rounded"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAQNJREFUeJzt0TERwCAAwMBS/9ZYMAQzCsjwryB3GXOu/ZHxvw7gZkiMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITEHS2IEM/576FwAAAAASUVORK5CYII="
              alt="Generic placeholder image" width="160" height="120">
            <p class="card-text-pilares text-white m-0">Lorem ipsum dolor</p>
          </div>
          <div class="col">
            <img class="rounded"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAQNJREFUeJzt0TERwCAAwMBS/9ZYMAQzCsjwryB3GXOu/ZHxvw7gZkiMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITEHS2IEM/576FwAAAAASUVORK5CYII="
              alt="Generic placeholder image" width="160" height="120">
            <p class="card-text-pilares text-white m-0">Lorem ipsum dolor</p>
          </div>
          <div class="col">
            <img class="rounded"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAQNJREFUeJzt0TERwCAAwMBS/9ZYMAQzCsjwryB3GXOu/ZHxvw7gZkiMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITEHS2IEM/576FwAAAAASUVORK5CYII="
              alt="Generic placeholder image" width="160" height="120">
            <p class="card-text-pilares text-white m-0">Lorem ipsum dolor</p>
          </div>
          <div class="col">
            <img class="rounded"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAQNJREFUeJzt0TERwCAAwMBS/9ZYMAQzCsjwryB3GXOu/ZHxvw7gZkiMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITEHS2IEM/576FwAAAAASUVORK5CYII="
              alt="Generic placeholder image" width="160" height="120">
            <p class="card-text-pilares text-white m-0">Lorem ipsum dolor</p>
          </div>
          <div class="col">
            <img class="rounded"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAQNJREFUeJzt0TERwCAAwMBS/9ZYMAQzCsjwryB3GXOu/ZHxvw7gZkiMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITGGxBgSY0iMITEHS2IEM/576FwAAAAASUVORK5CYII="
              alt="Generic placeholder image" width="160" height="120">
            <p class="card-text-pilares text-white m-0">Lorem ipsum dolor</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-calculadora text-center">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5">
            <h2 class="title-parceiros text-left">Lorem ipsum dolor sit amet, consectetur</h2>
          </div>
          <div class="col">
            <img class="rounded-circle"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="Generic placeholder image" width="150" height="150">
          </div>
          <div class="col">
            <img class="rounded-circle"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="Generic placeholder image" width="150" height="150">
          </div>
          <div class="col">
            <img class="rounded-circle"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="Generic placeholder image" width="150" height="150">
          </div>
          <div class="col">
            <img class="rounded-circle"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="Generic placeholder image" width="150" height="150">
          </div>
          <div class="col">
            <img class="rounded-circle"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
              alt="Generic placeholder image" width="150" height="150">
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>