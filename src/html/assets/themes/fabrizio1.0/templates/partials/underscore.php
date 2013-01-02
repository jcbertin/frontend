<?php $isAdmin = $this->user->isAdmin(); ?>
<script type="tmpl/underscore" id="photo-meta">
  <div class="photo-meta">
    <?php if($isAdmin) { ?>
      <h4 class="title edit"><a href="/p/<%= id %>" title="Update the title"><%= title || filenameOriginal %></a></h4>
      <ul class="info">
        <li><a href="#"><i class="tb-icon-small-comment tb-icon-dark"></i> <span class="number">24</span></li>
        <li><a href="#"><i class="tb-icon-small-heart tb-icon-dark"></i> <span class="number">24</span></li>
        <li><a href="#"><i class="tb-icon-small-maximize tb-icon-dark"></i> <span class="number">Share</span></li>
        <li><a href="#" title="Toggle the privacy setting"><i class="tb-icon-small-<%= permission == 0 ? 'locked' : 'unlocked' %> tb-icon-dark permission edit" data-id="<%= id %>"></i></li>
        <li><a href="#" title="Set as your profile photo"><i class="tb-icon-small-profile tb-icon-dark profile edit" data-id="<%= id %>"></i></li>
      </ul>
    <?php } else { ?>
      <h4 class="title"><%= title || filenameOriginal %></h4>
      <ul class="info">
        <li><a href="#"><i class="tb-icon-small-comment tb-icon-dark"></i> <span class="number">24</span></li>
        <li><a href="#"><i class="tb-icon-small-heart tb-icon-dark"></i> <span class="number">24</span></li>
        <li><a href="#"><i class="tb-icon-small-maximize tb-icon-dark"></i> <span class="number">Share</span></li>
      </ul>
    <?php } ?>
  </div>
</script>
<script type="tmpl/underscore" id="profile-photo-meta">
  <img class="profile-pic profile-photo" src="<%= photoUrl %>" />
</script>
<!--
  <img class="profile-pic profile-photo" src="<%= photoUrl %>" />
-->
<script type="tmpl/underscore" id="profile-name-meta">
  <span class="name <?php if($isAdmin) { ?> edit <?php } ?>" <?php if($isAdmin) { ?>title="Change display name"<?php } ?>><%= name %></span>
</script>

<script type="tmpl/underscore" id="op-lightbox">
  <div class="op-lightbox">
    <div class="header">
      <div class="container">
        <div class="logo"></div>
      </div>
    </div>
    <div class="bd">
      <div class="photo">
        <div class="nav">
          <a href="#" class="prev">&lt;</a>
          <a href="#" class="next">&gt;</a>
        </div>
      </div>
      <div class="details">
        <div class="container">
        
        </div>
      </div>
    </div>
  </div>
</script>
<script type="tmpl/underscore" id="op-lightbox-details">
  <div class="detail-block">
    <div class="title">
      <span class="text"><%= title || filenameOriginal %></span>
      <a href="#"><i class="tb-icon-heart tb-icon-dark"></i></a>
    </div>
    <div class="description"><%= description %></div>
  </div>
  <div class="action-block">
  
  </div>
</script>

<script type="tmpl/underscore" id="album-meta">
  <li>
    <a href="/photos/album-<%= id %>/list">
      <img src="<%= cover.path200x200xCR %>">
    </a>
    <?php if($isAdmin) { ?>
      <h5 class=" name edit"><%= name %></h5>
    <?php } else { ?>
      <h5 class="name"><%= name %></h5>
    <?php } ?>
  </li>
</script>

<script type="tmpl/underscore" id="photo-detail-meta">
  <img src="<%= path870x550 %>">
  <br>
  <?php if($isAdmin) { ?>
    <a href="#" class="title edit"><%= title %></a>
    <br>
    <a href="#" class="description edit"><%= description %></a>
  <?php } else { ?>
   <%= title %>
   <br>
   <%= description %>
  <?php } ?>

   <hr>

  <% if (!_.isNull(previous)) { %>
    <% if (!_.isNull(previous[0])) { %>
      <a class="next" data-id="<%= previous[0].id %>">
        <img src="<%= previous[0].path90x90xCR %>">
      </a>
    <% } %>
    <% if (!_.isNull(previous[1])) { %>
      <a class="next" data-id="<%= previous[1].id %>">
        <img src="<%= previous[1].path90x90xCR %>">
      </a>
    <% } %>
  <% } %>
  --
  <% if (!_.isNull(next)) { %>
    <% if (!_.isNull(next[0])) { %>
      <a class="next" data-id="<%= next[0].id %>">
        <img src="<%= next[0].path90x90xCR %>">
      </a>
    <% } %>
    <% if (!_.isNull(next[1])) { %>
      <a class="next" data-id="<%= next[1].id %>">
        <img src="<%= next[1].path90x90xCR %>">
      </a>
    <% } %>
  <% } %>
  <ul>
    <% for(var tag in tags) { %>
      <li><%= tags[tag] %></li>
    <% } %>
  </ul>
</script>
