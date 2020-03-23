SELECT profile_id, COUNT(document_id) FROM profile_document GROUP BY profile_id ORDER BY profile_id;
