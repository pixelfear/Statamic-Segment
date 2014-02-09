A quick plugin to get the segments of a supplied URL.

    {{ segment num="2" url="/blog/categories/whiskey" }}
    Outputs: categories

    {{ segment num="1" url="/blog/categories/whiskey" }}
    Outputs: blog
    
    {{ segment url="/blog/categories/whiskey" }}
    Outputs: blog  
    (The num parameter defaults to 1)
    
    {{ segment num="-1" url="/blog/categories/whiskey" }}
    Outputs: /blog/categories

    {{ segment num="-2" url="/blog/categories/whiskey" }}
    Outputs: /blog