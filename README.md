A quick plugin to get the segments of a supplied URL.

    {{ segment num="2" url="/blog/categories/whiskey" }}
    Outputs: categories

    {{ segment num="1" url="/blog/categories/whiskey" }}
    Outputs: blog
    
    {{ segment url="/blog/categories/whiskey" }}
    Outputs: blog  
    (The num parameter defaults to 1)

Use a negative num to get segments from the end of the URL.

    {{ segment num="-1" url="/blog/categories/whiskey" }}
    Outputs: categories
    
    {{ segment num="-2" url="/blog/categories/whiskey" }}
    Outputs: blog
    
    {{ segment url="/blog/categories/whiskey" }}
    Outputs: blog

Use segment:url and segment:parent_url to get the full url of segments.  
    (Note: url will default to current_url for this tag)

    {{ segment:url num="2" url="/blog/categories/whiskey" }}
    Outputs: /blog/categories

    {{ segment:url num="1" url="/blog/categories/whiskey" }}
    Outputs: /blog

    {{ segment num="-1" url="/blog/categories/whiskey" }}
    Outputs: /blog/categories
    
    {{ segment num="-2" url="/blog/categories/whiskey" }}
    Outputs: /blog
    
    {{ segment:parent_url url="/blog/categories/whiskey" }}
    Outputs: /blog/categories
