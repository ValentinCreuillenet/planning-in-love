<style>
.dropbtn:hover {
  color:black;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: whitesmoke;}

</style>

<header class="bg-gray-400 font-sans leading-normal tracking-normal">
	<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6 fixed w-full z-10 top-0">
		<div class="flex items-center flex-shrink-0 text-white mr-6">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="./">
				<span class="text-2xl pl-2"><i class="em em-grinning"></i> Planning in Love</span>
			</a>
		</div>

		<div class="block lg:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
				<?php foreach (scandir("./pages") as $pages) : ?>
			<? if(is_dir("./pages/{$pages}") && $pages != "." && $pages != "..") : ?>
			<div class="dropdown">
				<li class="mr-3">
					<a class="dropbtn inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"><?= $pages ?></a>
					<div class="dropdown-content">
					<?php foreach(scandir("./pages/{$pages}") as $page) : ?>
						<? if($page != "." && $page != "..") : ?>
							<a href= <?= "./?folder={$pages}&file=".rtrim($page,".php") ?> ><?= rtrim($page,".php") ?></a>
						<? endif ?>
					<? endforeach ?>
				</li>
			</div>
			<? endif ?>
			<? endforeach ?>
			</ul>
		</div>
	</nav>
</header>