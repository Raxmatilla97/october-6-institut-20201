# News Page Views Extension
This plugin is an extension to the [Indikator.News](https://github.com/gergo85/oc-news) plugin and a copy of [Blog Views](https://github.com/vdomah/blogviews) for Indikator News and Newsletter Plugin. This extension add views tracking to blog posts and allows to add views counter to a post and display popular posts widget.

Adds dynamic views property to Post model: {{ post.views }}

### Components
#### Popular Posts
The `popularPosts` component can be used to display top viewed posts.

- **postsLimit** - The max number of posts to show.
- **postPage** - Reference to the page name for linking to posts.
- **noPostsMessage** - Message to display when there are no posts.

#### Views (counter)
The `Views` component can be used to display post views number. In most cases use just {{ post.views }} without this component.

## Credits

[Art Gek](https://github.com/vdomah/blogviews)