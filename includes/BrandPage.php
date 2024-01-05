<header class="headerTransparent">
<?php get_template_part('includes\Navbar');?>
</header>
<main class="detailPage">
        <div class="detailPage__background">
          <div class="detailPage__overlay"></div>
          <img
            src="https://image.tmdb.org/t/p/w1280//zMrk2G3XsnfYKiIp1NEfdtvDyBH.jpg" />
        </div>
        <div class="detailPage__info">
          <div class="detailPage__container">
            <h1 class="detailPage__title">Mulan</h1>
            <div class="detaiPage__buttons">
              <Button
                class="detailPage__playBtn">
                Watch Now
              </Button>
              <Button
                class="detailPage__trailerBtn">
                Trailer
              </Button>
              <IconButton size="small" class="detailPage_radialBtn">
                <AddIcon />
              </IconButton>
              <IconButton size="small" class="detailPage_radialBtn">
                <GroupIcon />
              </IconButton>
            </div>
            <div class="detailPage__data">
              <span class="detailPage__years">
                {singleMovie["release_date"]}
              </span>
              <span class="detailPage__duration">
                {singleMovie["runtime"] + " minutes"}
              </span>
                    <span class="detailPage__genres">{genre.name}</span>
            </div>
            <div class="detailPage__description">
              <p>{singleMovie["overview"]}</p>
            </div>
            <AppBar class="detailPage__tabsHeader" position="static">
              <Tabs value={value} onChange={handleChange}>
                <Tab label="Suggestions" />
                <Tab label="Extras" />
                <Tab label="Details" />
              </Tabs>
            </AppBar>
            <TabPanel class="tab__panel" value={value} index={0}>
              <Slider
                class="singleRow singleRow__slider singleRow__recommendedSlider"
                {...sliderConfig}
              >
                {recommended.map((recommendedMovie) => (
                  <MovieCard
                    id={recommendedMovie.id}
                    key={recommendedMovie.id}
                    title={recommendedMovie.title}
                    poster={recommendedMovie.backdrop_path}
                  />
                ))}
              </Slider>
            </TabPanel>
            <TabPanel class="tab__panel" value={value} index={1}>
                <Slider
                  class="singleRow singleRow__slider singleRow__recommendedSlider youtubeVideos"
                  {...sliderConfig}>
                </Slider>
                <p>There isn0t extra content</p>
            
            </TabPanel>
            <TabPanel class="tab__panel" value={value} index={2}>
              <div class="tab__container">
                <div class="tab__mainColumn">
                  <h2 class="tab__title">{singleMovie["title"]}</h2>
                  <p class="tab__description">{singleMovie["overview"]}</p>
                </div>
                <div class="tab__itemsColumn">
                  <div class="tab_itemSubColumn">
                    <div class="tab__item">
                      <h3 class="tab__subtitle">Duration:</h3>
                      <p>{singleMovie["runtime"]} minutes</p>
                    </div>
                    <div class="tab__item">
                      <h3 class="tab__subtitle">Release Date:</h3>
                      <p>{singleMovie["release_date"]}</p>
                    </div>
                  </div>
                  <div class="tab__itemSubColumn">
                    <div class="tab__item">
                      <h3 class="tab__subtitle">Genres:</h3>         
                    </div>
                    <div class="tab__item">
                      <h3 class="tab__subtitle">Cast:</h3>
                        <p>{actor.name}</p>
                    </div>
                  </div>
                </div>
              </div>
            </TabPanel>
          </div>
        </div>
      </main>