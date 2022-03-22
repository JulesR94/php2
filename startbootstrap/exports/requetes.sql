-- Pour obtenir le contenu des posts --
SELECT post_date,post_content,post_title,post_content, cat_descr
FROM blog_posts

INNER JOIN blog_users
ON post_author = ID

INNER JOIN blog_categories
ON post_category = cat_id
