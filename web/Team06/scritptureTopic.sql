CREATE TABLE scripture_topic (
  scriptureId int NOT NULL REFERENCES scripture(id),
  topicId int NOT NULL REFERENCES topic(id)
  );
  