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
