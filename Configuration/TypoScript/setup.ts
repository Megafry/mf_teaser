#add my Templates
lib.fluidContent {
  templateRootPaths {
    114 = EXT:mf_teaser/Resources/Private/Templates
  }
  partialRootPaths {
    #114 = EXT:mf_teaser/Resources/Private/Partials
  }
  layoutRootPaths {
    #114 = EXT:mf_teaser/Resources/Private/Layouts
  }
}

tt_content {
    mf_teaser < lib.fluidContent
    mf_teaser {
        templateName = MfTeaser
        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            10 {
                references.fieldName = assets
            }
            20 = Megafry\MfTeaser\DataProcessing\MfTeaserProcessor
        }
    }
}
