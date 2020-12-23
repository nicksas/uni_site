{"version":3,"sources":["top_panel.js"],"names":["BX","namespace","removeClass","Landing","Utils","addClass","onCustomEvent","bind","makeFilterablePopupMenu","makeSelectablePopupMenu","style","encodeDataValue","Menu","UI","Tool","Panel","Top","id","data","BasePanel","apply","this","arguments","layout","document","querySelector","siteButton","pageButton","undoButton","redoButton","desktopButton","tabletButton","mobileButton","iframeWrapper","iframe","lastActive","loader","onDesktopSizeChange","onTabletSizeChange","onMobileSizeChange","onIframeClick","onSiteButtonClick","onPageButtonClick","onUndo","onRedo","onKeyDown","adjustHistoryButtonsState","contentDocument","window","sitesCount","parseInt","Main","getInstance","options","sites_count","pagesCount","pages_count","rootWindow","PageObject","getRootWindow","topHistory","getClass","History","instance","prototype","constructor","__proto__","superclass","event","key","keyCode","which","navigator","userAgent","match","ctrlKey","metaKey","shiftKey","preventDefault","canUndo","hasAttribute","getLoader","show","undo","then","hide","canRedo","redo","Loader","size","offset","top","left","stroke-width","margin-top","history","classList","remove","removeAttribute","add","disableHistory","setAttribute","enableHistory","disableDevices","enableDevices","DOM","write","width","dataset","postfix","enableControls","disableControls","siteMenu","bindElement","events","onPopupClose","blur","menuShowDelay","offsetTop","popupWindow","contentContainer","minHeight","minWidth","siteId","site_id","landingId","filter","=TYPE","params","type","SPECIAL","Backend","getSites","sites","Promise","resolve","setTimeout","forEach","site","addMenuItem","ID","text","TITLE","items","editMask","sef_url","site_edit","showMask","site_show","push","Loc","getMessage","href","replace","pageMenu","getLandings","landings","landing","FOLDER_ID","IS_AREA","landing_edit","viewMask","landing_view","FOLDER","siteShowMask","addQueryParams","SITE_ID","folderId","requestAnimationFrame","close"],"mappings":"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","file":"top_panel.map.js"}