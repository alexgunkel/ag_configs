config {
    doctype = html5
    xmlprologue = xml_11
    debug = 1
    admPanel = 1
}

page {
    meta {
        og:locale = de_DE
        og:locale:alternative {
            attribute = property
            value {
                1 = en_EN
            }
        }
        debug = 1
    }


    bodyTag >
    bodyTagCObject = TEXT
    bodyTagCObject.dataWrap = <body class="page-{field:uid}">
}